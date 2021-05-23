<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function index(){
        $search = request()->query('cari');
        if($search){
            $products = DB::table('product')->where('name', 'LIKE', '%'.$search.'%')->paginate(10);
            return view("hasil_pencarian", ['products'=>$products]);
        }
    }
}
