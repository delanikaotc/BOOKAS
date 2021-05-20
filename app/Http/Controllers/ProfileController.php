<?php


namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Rekening;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ProfileController extends Controller
{

    public function show(Request $request){
        $rekening=Rekening::where('iduser', $request->session()->get('id'))->first();
        $user=User::where('id',$request->session()->get('id'))->first();
        return view('profile', [
            'rekening'=>$rekening,
            'user'=>$user
        ]);
    }

    public function showedit(Request $request){
        $id=$request->session()->get('id');
        return view('profile_edit', [
            'id'=>$id
        ]);
    }

    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'phone' => 'required',
            'address' => 'required'
        ]);
        
        $data = [
            'phone' => $request->phone,
            'address' => $request->address,
        ];

        User::find($id)->update($data);

        return redirect()->route('showprofile');
    }


}
