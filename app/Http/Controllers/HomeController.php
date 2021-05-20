<?php


namespace App\Http\Controllers;


use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $datum = [
            "40000" => Product::limit(5)->where('price', '40000')->get(),
            "all" =>Product::get()
        ];
        return view("home.index", compact("datum"));
    }
}
