<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search($search = null) {
        $search_text = $search;
        if ($search_text==NULL) {
            $data= Product::all();
        } else {
            $data=Product::where('name','LIKE', '%'.$search_text.'%')->get();
        }
        return view('results', compact('data'));
    }
}
