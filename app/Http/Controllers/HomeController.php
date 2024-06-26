<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($slug = 'cybercamera')
    {
        $product = Product::with('prices')->where('slug','LIKE',$slug)->first();

        if(!$product) {
            $product = Product::with('prices')->find(1);
        }

        $this->data['product'] = $product;

        return view($product->slug, $this->data);
    }
}
