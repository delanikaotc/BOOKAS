<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function index(){
        $users = DB::select('select * from user');
        return view('admin_pengguna', ['user'=>$users]);
    }

    public function destroy($id){
        DB::delete('delete from user where id =?', [$id]);
        return back()->with("success", "Data pengguna berhasil dihapus!");
    }
}
