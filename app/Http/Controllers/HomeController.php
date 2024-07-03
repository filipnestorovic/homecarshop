<?php

namespace App\Http\Controllers;

use App\Events\NewOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Propaganistas\LaravelPhone\PhoneNumber;

class HomeController extends Controller
{

    protected $customerErrorMessage = "Greška prilikom porudžbine, molimo da nas kontaktirate putem emaila braavosdoo@gmail.com!";

    public function index($slug = 'cybercamera')
    {
        $product = Product::with('prices')->where('slug','LIKE',$slug)->first();

        if(!$product) {
            $product = Product::with('prices')->find(1);
        }

        $prices = [];
        foreach($product->prices as $price) {
            if($price->getAttribute('deleted_at') === null) {
                $prices[$price->getAttribute('quantity')] = $price->toArray();

                $originalPriceMultiply = 0.6;
                $totalPrice = round(($price->price / $originalPriceMultiply));
                $originalPrice = (ceil($totalPrice / 100)) * 100 - 10;
                $prices[$price->getAttribute('quantity')]['originalPrice'] = $originalPrice;
            }
        }

        $this->data['product'] = $product;
        $this->data['prices'] = $prices;

        return view($product->slug, $this->data);
    }

    public function validatePhoneNumber(Request $request){

        $number = $request->get('phone');
        $countryCode = 'RS';

        $name = $request->get('name');
        $address = $request->get('address');
        $city = $request->get('city');
        $zip = $request->get('zip');
        $quantity = $request->get('quantity');
        $product_id = $request->get('product_id');

        try {
            if($number != null) {

                $phone_number = new PhoneNumber($number, $countryCode);

                return $phone_number->isValid();

            } else {
                Log::warning("Validation - Phone is null - Request: ".$request);
            }
        } catch (\Exception $exception){
            $customer_data = "Phone: ".$number."\nName: ".$name."\nAddress: ".$address."\nCity: ".$city."\nZip: ".$zip.
                "\nQuantity: ".$quantity."\nProduct: ".$product_id;

            Log::warning("Validation - \nError: ".$exception->getMessage()."\n".$customer_data);
            return 0;
        }
    }


    public function order(Request $request)
    {

        $rules = [
            'name' => ['required'],
            'phone' => ['required'],
        ];

        $messages = [
//            'required' => 'Polje :attribute je obavezno!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $quantity = $request->get('quantity');
            $product_id = $request->get('product_id');

            $product = Product::findOrFail($product_id);

            $product_prices = ProductPrice::where('quantity','=',$quantity)->where('product_id','=',$product_id)->firstOrFail();

            $order = Order::create([
                'name' => $request->get('name'),
                'phone' => $request->get('phone'),
                'street' => $request->get('shipping_address') ?? 'Uneti',
                'city' => $request->get('shipping_city') ?? 'Uneti',
                'zip' => $request->get('shipping_zip') ?? 0,
                'product_id' => $product_id,
                'quantity' => $quantity,
                'amount' => $product_prices->price,
                'is_free_shipping' => $product_prices->is_free_shipping,
                'note' => ''
            ]);

            if($order) {
                event(new NewOrder($order));
                return redirect()->to('/'.$product->slug.'/thankyou')->with('data', $order);
            }
        } catch (\Exception $ex) {
            Log::error("An error has occurred during checkout - " . $ex->getMessage());
            return redirect()->back()->withErrors([$this->customerErrorMessage]);
        }
    }

    public function thankyou($slug)
    {
        $this->data['product'] = Product::where('slug','like',$slug)->firstOrFail();
        $this->data['order'] = session('data');

        return view('thankyou',$this->data);
    }
}
