<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    //
    public function index()
    {
        $data = [];
        $data['title'] = "SportChamp Chat";
        $data['icon'] = "fa-support";

        // Define sections
        $sections = [];
        $sections[] = "FAQ";
        $sections[] = "Support";
        $data['sections'] = $sections;

        return view('chat', $data);
    }
}
