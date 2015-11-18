<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data = [];
        $data['title'] = "SportChamp Home";
        $data['icon'] = "fa-home";

        // Define sections
        $sections = [];
        $sections[] = "SportChamps";
        $sections[] = "Featured";
        $sections[] = "Sale";
        $data['sections'] = $sections;

        return view('home', $data);
    }
}
