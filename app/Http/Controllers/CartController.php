<?php


namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CartController extends Controller
{
    public function index(){
        // view the cart items
        $items = Cart::join('product', 'product.id', '=', 'cart.id_product')
                      ->join('user', 'user.id', '=', 'cart.id_penjual')
                      ->select('cart.*', 'product.name', 'product.price', 'product.deskripsi', 'product.image', 'user.name as nama_penjual')
                      ->where('id_pembeli', session()->get('id'))
                      ->orderBy('id', 'desc')
                      ->get();
//        return response()->json($items);
        $user = User::where('id', session()->get('id'))->first();
        return view("keranjang.index", [
          'items'=>$items,
          'user'=>$user
        ]);
    }

    public function addToCart(Request $request){
        try {
            $product = Product::where('id', $request->id)->first();
            $cart = Cart::where('id_product', $request->id)->first();
            $qty = 1;
            if (!empty($cart)) {
              $qty = $cart->qty + 1;
            }
            $data = [
                'id_pembeli' => session()->get('id'),
                'id_penjual' => $product->id_user,
                'id_product' => $product->id,
                'qty' => $qty
            ];
            // echo print_r($data);exit;
            if (empty($cart)) {
              Cart::create($data);
            }else{
              Cart::where('id', $cart->id)->update($data);
            }
            return redirect("keranjang")->with("success", "Berhasil ditambahkan");
        } catch (\Exception $e){
            return back()->with("warning", $e->getMessage());
        }
    }

    public function delete($id)
    {
      Cart::where('id', $id)->delete();
      return redirect('keranjang');
    }


// -====================================================

    public function pembayaran($id=''){
        // view the cart items
        $items = Cart::join('product', 'product.id', '=', 'cart.id_product')
                      ->join('user', 'user.id', '=', 'cart.id_penjual')
                      ->select('cart.*', 'product.name', 'product.price', 'product.deskripsi', 'product.image', 'user.name as nama_penjual')
                      ->where('id_pembeli', session()->get('id'))
                      ->orderBy('id', 'desc')
                      ->get();
    //        return response()->json($items);
        if ($id!='')
        {
          $product = Product::where('id', $id)->first();
          $data = [
              'id_pembeli' => session()->get('id'),
              'id_penjual' => $product->id_user,
              'id_product' => $product->id,
              'qty'        => 1
          ];
          Cart::create($data);
          return redirect('pembayaran');
        }
        $user = User::where('id', session()->get('id'))->first();
        return view("pembayaran", [
          'items'=>$items,
          'user'=>$user
        ]);
    }

}
