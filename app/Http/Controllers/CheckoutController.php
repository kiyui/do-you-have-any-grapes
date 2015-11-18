<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    //
    public function index()
    {
        $data = [];
        $data['title'] = "SportChamp Checkout";
        $data['icon'] = "fa-cart-arrow-down";

        // Define sections
        $sections = [];
        $sections[] = "Shipping & Payment";
        $data['sections'] = $sections;

        return view('checkout', $data);
    }
}
