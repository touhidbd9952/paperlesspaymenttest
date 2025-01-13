<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paperless_payment()
    {
        return view('payment');
    }
}
