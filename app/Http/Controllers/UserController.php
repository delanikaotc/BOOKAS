<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function register(){
        $config = ["action" => "/daftar"];
        return view("daftar", compact("config"));
    }

    public function store(Request $request){
        try {
            $request->validate([
                'email' => 'unique:user,email'
            ]);
            $user = User::create($request->all());
            return back()->with("success", "Berhasil mendaftar");
        } catch (ValidationException $exception){
            return back()->withErrors($exception->errors());
        } catch (\Exception $e){
            return back()->with("warning", $e->getMessage());
        }
    }

    public function login(){
        $config = ["action" => "/masuk"];
        return view("masuk", compact("config"));
    }

    public function doLogin(Request $request){
        $admin = User::where("email", $request->email)->get()->first();
        if (!empty($admin)){
            if (password_verify($request->password, $admin->password)) {
                session([
                    'id'        => $admin->id,
                    'name'      => $admin->name,
                    'email'     => $admin->email,
                    'role_id'   => $admin->role_id
                ]);
                switch($admin->role_id) {
                    case 2:
                        return redirect('/home');
                    case 1:
                        return redirect('/admin-pengguna');
                }

            } else {
                return back()->with('warning','unauthorized');
            }
        } else {
            return back()->with('warning','User Not Found');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/masuk');
    }
}
