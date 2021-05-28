<?php


namespace App\Http\Controllers;


use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $id = session()->get('id');
        if (empty($_GET['search'])) {
          $product = Product::where('id_user', '!=', $id)->orderBy('id', 'DESC')->get();
        } else {
          $term = urldecode($_GET['search']);
          $product = Product::where('id_user', '!=', $id)->where('name', 'LIKE', '%'.$term.'%')->orderBy('id', 'DESC')->get();
        }
        $datum = [
            "40000" => Product::limit(5)->where('price', '40000')->get(),
            "all" => $product
        ];
        return view("home.index", compact("datum"));
    }
}
