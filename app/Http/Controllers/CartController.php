<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = [];
        $data['title'] = "SportChamp Cart";
        $data['icon'] = "fa-shopping-cart";
        $data['name'] = $request->input('name');

        // Define sections
        $sections = [];
        $sections[] = "Cart";
        $sections[] = "Reccommendations";
        $data['sections'] = $sections;

        return view('cart', $data);
    }
}
