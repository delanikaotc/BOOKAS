<?php


namespace App\Http\Controllers;


use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ProductController extends Controller
{
    public function detail(Request $request){
        $product = Product::where('id', $request->id)->first();
        return view("detail.index", compact("product"));
    }

    public function inputdetail(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'file|image|mimes:jpeg,png,jpg',
            'tgl_terbit' => 'required',
            'penerbit' => 'required',
            'deskripsi' => 'required',
            'kondisi' => 'required',
            'penulis' => 'required'
        ]);
        // menyimpan data file yang diupload ke variabel $file
        
            $file = $request->file('image');

            $nama_file = time() . "_" . $file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage/image';
            $file->move($tujuan_upload, $nama_file);

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'image' => $nama_file,
            'tgl_terbit' => $request->tgl_terbit,
            'penerbit' => $request->penerbit,
            'deskripsi' => $request->deskripsi,
            'kondisi' => $request->kondisi,
            'penulis' => $request->penulis,
            'id_user' => $request->session()->get('id')
        ];
        Product::create($data);
        return redirect('/produk');
    }

    public function show(Request $request){
        $items=Product::where('id_user', $request->session()->get('id'))->get();

        return view('produk', [
            'items'=>$items
        ]);
    }


}
