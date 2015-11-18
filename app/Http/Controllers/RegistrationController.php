<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    //
    public function index()
    {
        $data = [];
        $data['title'] = "SportChamp Registration";
        $data['icon'] = "fa-user-plus";

        // Define sections
        $sections = [];
        $sections[] = "Register";
        $data['sections'] = $sections;

        return view('registration', $data);
    }
}
