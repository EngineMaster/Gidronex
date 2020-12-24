<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class AdminController extends Controller
{
    public function insert(Request $request){
        DB::insert("INSERT INTO products (`category_id`,`name`,`index`,`qty`,`price`) VALUES (?,?,?,?,?)",[
            $request->input('category_id'),
            $request->input('index'),
            $request->input('name'),
            $request->input('qty'),
            $request->input('price'),]);
        return view('admin-insert');
    }
}
