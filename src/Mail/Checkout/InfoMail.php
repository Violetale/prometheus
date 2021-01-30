<?php

namespace Mediabroker\Core\Mail\Checkout;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Mediabroker\Core\Models\Order\Order;

class InfoMail extends Mailable
{
    use Queueable, SerializesModels;

    /** @var Order $order */
    public $order;

    /**
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function build()
    {
        return $this->subject('Информация о заказе')
            ->from(config('core-general.email_from'))
            ->view('core::emails.checkout.info');
    }
}
