<?php


namespace App\Http\Controllers;


class AboutController extends Controller
{
    public function about(){
        return view("tentang.index");
    }

    public function hubungi(){
        return view("hubungu.index");
    }
}
