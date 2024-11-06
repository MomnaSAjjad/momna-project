<?php

namespace App\Interface;

use App\Models\Subscription;

interface BillableInterface
{
    /**
     * Charge the customer using the payment gateway
     *
     * @param  Subscription  $Subscription
     *
     * @return string
     */
    public function checkout(Subscription $order);
}