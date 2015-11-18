<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function index()
    {
        $data = [];
        $data['title'] = "SportChamp Login";
        $data['icon'] = "fa-user-plus";

        // Define sections
        $sections = [];
        $sections[] = "Login";
        $data['sections'] = $sections;

        return view('login', $data);
    }
}
