<?php


namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Rekening;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class RekeningController extends Controller
{
    public function inputdetail(Request $request){
        $request->validate([
            'namaBank' => 'required',
            'noRekening' => 'required'
        ]);

        $data = [
            'iduser' => $request->session()->get('id'),
            'namaBank' => $request->namaBank,
            'noRekening' => $request->noRekening
        ];
        Rekening::create($data);
        return redirect('/edit-profile');
    }

}
