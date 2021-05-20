<?php


namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index(){
        // view the cart items
        $items = Cart::session(session("id"))->getContent();
//        return response()->json($items);
        return view("keranjang.index", compact("items"));
    }

    public function addToCart(Request $request){
        try {
            $product = Product::find($request->id);
            Cart::session(session("id"))->add(array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'attributes' => array(),
                'associatedModel' => $product
            ));
            return redirect("keranjang")->with("success", "Berhasil ditambahkan");
        } catch (\Exception $e){
            return back()->with("warning", $e->getMessage());
        }
    }
}
