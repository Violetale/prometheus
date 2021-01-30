<?php

namespace Mediabroker\Core\Mail\Checkout;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Mediabroker\Core\Models\Order\Order;

class SuccessMail extends Mailable
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
        return $this->subject('Успешное оформление заказа')
            ->from(config('core-general.email_from'))
            ->view('core::emails.checkout.success');
    }
}
