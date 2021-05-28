<?php


namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){
        // view the cart items
        $items = Order::join('user', 'user.id', '=', 'order.id_penjual')
                      ->select('order.*', 'user.name as nama_penjual')
                      ->where('id_pembeli', session()->get('id'))
                      ->orderBy('order.id', 'desc')
                      ->get();

        $user = User::where('id', session()->get('id'))->first();
        return view("pesanan", [
          'items'=>$items,
          'user'=>$user
        ]);
    }

    public function create_order(Request $request){
        try {
            $cart = Cart::where('id_pembeli', session()->get('id'))->get();
            if (empty($cart)) {
              return redirect('keranjang')->with("warning", "Pesanan tidak ditemukan!");
            }
            $data=array();
            $jml=0;
            foreach ($cart as $key => $value) {
              $no_transaksi = time().$key;
              $pembeli = User::where('id', $value->id_pembeli)->first();
              $penjual = User::where('id', $value->id_penjual)->first();
              $product = Product::where('id', $value->id_product)->first();
              $data[] = [
                  'no_transaksi' => $no_transaksi,
                  'id_pembeli'   => $value->id_pembeli,
                  'id_penjual'   => $value->id_penjual,
                  'id_product'   => $value->id_product,
                  'nama_penjual' => $penjual->name,
                  'nama_pembeli' => $pembeli->name,
                  'name'         => $product->name,
                  'price'        => $product->price,
                  'qty'          => $value->qty,
                  'image'        => $product->image,
                  'tgl_terbit'   => $product->tgl_terbit,
                  'penerbit'     => $product->penerbit,
                  'deskripsi'    => $product->deskripsi,
                  'kondisi'      => $product->kondisi,
                  'penulis'      => $product->penulis,
                  'status'       => 0,
                  'created_at'   => date('Y-m-d H:i:s')
              ];
              $jml++;
            }
            if (!empty($data)) {
              Order::insert($data);
              Cart::where('id_pembeli', session()->get('id'))->delete();
              $alert='success';
              $pesan='Berhasil ditambahkan';
              if ($jml==1) {
                $url = 'bukti-transfer/'.$no_transaksi;
              } else {
                $url = 'pesanan';
              }
            } else {
              $alert='warning';
              $pesan='Gagal! silahkan coba lagi.';
              $url  = 'keranjang';
            }
            return redirect("$url")->with("$alert", "$pesan");
        } catch (\Exception $e){
            return back()->with("warning", $e->getMessage());
        }
    }

  // -====================================================

      public function bukti_transfer($id=''){
          // view the cart items
          $items = Order::join('user', 'user.id', '=', 'order.id_penjual')
                        ->select('order.price', 'order.qty')
                        ->where('id_pembeli', session()->get('id'))
                        ->where('no_transaksi', $id)
                        ->where('status', 0)
                        ->orderBy('order.id', 'desc')
                        ->get();
          if (empty($items)) {
            return redirect('keranjang');
          }
          $user = User::where('id', session()->get('id'))->first();
          return view("bukti_transfer", [
            'no_transaksi'=>$id,
            'items'=>$items,
            'user'=>$user
          ]);
      }

      public function upload_bukti(Request $request){
        $request->validate([
            'no_transaksi' => 'required',
            'image' => 'file|image|mimes:jpeg,png,jpg',
        ]);

        $nama_file='';
        if ($request->image != '') {
            $file = $request->file('image');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage/bukti_transfer';
            $file->move($tujuan_upload, $nama_file);
        }else{
          return redirect("bukti-transfer/$id")->with("warning", "Gagal upload silahkan coba lagi!");
        }
        $data = [
          'foto_bukti' => $nama_file,
          'tgl_bukti'  => date('Y-m-d H:i:s'),
          'status' => 1
        ];
        Order::where('no_transaksi', $request->no_transaksi)->update($data);
        return redirect('/pesanan');
      }


// ADMIN -=====================================================================

  public function admin_transaksi()
  {
      // view the cart items
      $items = Order::join('user', 'user.id', '=', 'order.id_penjual')
                    ->select('order.*', 'user.name as nama_penjual')
                    ->orderBy('order.id', 'desc')
                    ->get();
      return view("admin_transaksi", [
        'items'=>$items
      ]);
  }

  public function admin_confirm_order($id)
  {
    Order::where('no_transaksi', $id)->update(['status'=>2, 'tgl_confirm_admin'=>date('Y-m-d H:i:s')]);
    return redirect('/admin-transaksi');
  }

// PENJUAL -===================================================================

  public function list_penjualan()
  {
    $items = Order::join('user', 'user.id', '=', 'order.id_penjual')
                  ->select('order.*', 'user.name as nama_penjual')
                  ->where('order.id_penjual', session()->get('id'))
                  ->orderBy('order.id', 'desc')
                  ->get();
    return view("penjualan", [
      'items'=>$items
    ]);
  }

  public function penjual_confirm_order($id, $stt='')
  {
    if (in_array($stt, array('3','4'))) {
      if ($stt==3) {
        $tgl = 'tgl_confirm_pengiriman';
      }else {
        $tgl = 'tgl_confirm_selesai';
      }
      $product = Order::where('no_transaksi', $id)->first();
      Order::where('no_transaksi', $id)->update(['status'=>$stt, "$tgl"=>date('Y-m-d H:i:s')]);
      if ($stt==4) {
        $total = $product->price*$product->qty;
        $data = [
            'id_user'      => session()->get('id'),
            'no_transaksi' => $id,
            'saldo_in'     => $total,
            'saldo_out'    => 0,
            'qty'          => $product->qty,
            'ket'          => "Order",
            'created_at'   => date('Y-m-d H:i:s')
        ];
        DB::table('saldo')->insert($data);
      }
    }
    return redirect('/penjualan');
  }

}
