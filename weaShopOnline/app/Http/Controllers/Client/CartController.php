<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function CartPage()
    {
        return view('client.layouts.CartPage');
    }
    public function Payment()
    {
        return view('client.layouts.Payment');
    }
}
