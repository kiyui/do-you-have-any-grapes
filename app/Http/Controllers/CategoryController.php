<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = [];
        $data['title'] = "SportChamp Item Categories";
        $data['icon'] = "fa-sort-amount-asc";
        $data['name'] = $request->input('name');

        // Define sections
        $sections = [];
        $sections[] = "Category";
        if ($data['name'] != "")
            $sections[] = "Reccommendations";
        $data['sections'] = $sections;

        return view('category', $data);
    }
}
