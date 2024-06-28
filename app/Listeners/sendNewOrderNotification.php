<?php

namespace App\Listeners;

use App\Events\NewOrder;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Laravel\Facades\Telegram;

class sendNewOrderNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewOrder $event): void
    {
        $order = $event->order;

        $countOrders = Order::whereDate('created_at', Carbon::today())->count();

        $message =
            "<b>Proizvod:</b> {$order->product->name}\n" .
            "<b>Ime:</b> {$order->name}\n" .
            "<b>Telefon:</b> {$order->phone}\n\n" .
            "<b>Ukupno danas:</b> {$countOrders}";

        try {
            Telegram::bot()->sendMessage([
                'chat_id' => config('constantsBraavos.TELEGRAM_CHAT_ID'),
                'parse_mode' => 'HTML',
                'text' => $message,
            ]);
        } catch (Exception $exception){
            Log::error('Problem with sending to Telegram');
        }

    }
}
