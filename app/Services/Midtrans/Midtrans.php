<?php

namespace App\Services\Midtrans;

use Midtrans\Config;

class Midtrans
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
    }
}
