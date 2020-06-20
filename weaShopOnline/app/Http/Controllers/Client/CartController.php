<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartpage()
    {
        return view('client.layouts.cartpage');
    }
    public function payment()
    {
        return view('client.layouts.payment');
    }
}
