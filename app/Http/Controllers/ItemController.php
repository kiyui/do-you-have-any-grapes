<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = [];
        $data['title'] = "SportChamp Item";
        $data['icon'] = "fa-folder-open";
        $data['name'] = $request->input('name');

        // Define sections
        $sections = [];
        $sections[] = "Item";
        $sections[] = "Related";
        $sections[] = "Reviews";
        $data['sections'] = $sections;

        return view('item', $data);
    }
}
