<?php


namespace App\Http\Controllers;


use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ProductController extends Controller
{
    public function detail(Request $request){
        $id_user=$request->session()->get('id');
        $product = Product::where('id', $request->id)->first();
        if (empty($product)) {
          return redirect('/produk');
        }
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
        $nama_file='';
        if ($request->image != '') {
            $file = $request->file('image');

            $nama_file = time() . "_" . $file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage/image';
            $file->move($tujuan_upload, $nama_file);
        }
        $data = [
            'name' => $request->name,
            'price' => preg_replace('/[^0-9]+/', '', $request->price),
            'image' => $nama_file,
            'tgl_terbit' => date('Y-m-d', strtotime($request->tgl_terbit)),
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
        $items=Product::where('id_user', $request->session()->get('id'))->orderBy('id', 'desc')->get();
        return view('produk', [
            'items'=>$items
        ]);
    }

    public function showedit(Request $request, $id){
        $id_user=$request->session()->get('id');
        $product = Product::where('id', $id)->where('id_user', $id_user)->first();
        if (empty($product)) {
          return redirect('/produk');
        }
        return view('produk_edit', [
            'id'=>$id,
            'product'=>$product
        ]);
    }

    public function update(Request $request, $id)
    {
      //melakukan validasi data
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

      $product = Product::where('id', $id)->first();
      $nama_file = $product->image;
      if ($request->image != '') {
        $file = $request->file('image');

        $nama_file = time() . "_" . $file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage/image';
        //code for remove old file
        if($product->image != ''  && $product->image != null){
             $file_old = 'public\storage\image\\'.$product->image;
             $file_old = base_path()."\\$file_old";
             if (file_exists($file_old)) {
               unlink($file_old);
             }
        }
        $file->move($tujuan_upload, $nama_file);
      }

      $data = [
          'name' => $request->name,
          'price' => preg_replace('/[^0-9]+/', '', $request->price),
          'image' => $nama_file,
          'tgl_terbit' => date('Y-m-d', strtotime($request->tgl_terbit)),
          'penerbit' => $request->penerbit,
          'deskripsi' => $request->deskripsi,
          'kondisi' => $request->kondisi,
          'penulis' => $request->penulis,
          'id_user' => $request->session()->get('id')
      ];

      Product::where('id', $id)->update($data);

      return redirect()->route('showproduk');
    }

    public function delete($id)
    {
      $product = Product::where('id', $id)->first();
      $nama_file = $product->image;
      if ($product->image != '') {
        //code for remove old file
        if($product->image != ''  && $product->image != null){
             $file_old = 'public\storage\image\\'.$product->image;
             $file_old = base_path()."\\$file_old";
             if (file_exists($file_old)) {
               unlink($file_old);
             }
        }
      }
      Product::where('id', $id)->delete();

      return redirect()->route('showproduk');
    }

}
