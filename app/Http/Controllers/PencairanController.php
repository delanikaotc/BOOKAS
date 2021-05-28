<?php


namespace App\Http\Controllers;

use App\Models\Pencairan;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\DB;

class PencairanController extends Controller
{

  public function index()
  {
    $id_user = session()->get('id');
    $get_tgl = Pencairan::select('total','created_at')
                         ->where('id_user', $id_user)
                         ->orderBy('id', 'DESC')
                         ->limit('1')
                         ->first();

    // echo $get_tgl->created_at; exit;
    if (empty($get_tgl)) {
      $total = 0;
      $tgl_terakhir = '1999-01-01 01:01:01';
    }else {
      $total = $get_tgl->total;
      $tgl_terakhir = $get_tgl->created_at;
    }

    // echo "$tgl_terakhir"; exit;

    $buku = DB::table('saldo')
                  ->select(DB::raw('COALESCE(SUM(qty),0) as total'))
                  ->where('id_user', $id_user)
                  ->where('saldo_in', '!=', 0)
                  ->where('created_at', '>', $tgl_terakhir)
                  ->first();

    $saldo = DB::table('saldo')
                  ->select(DB::raw('COALESCE(SUM(saldo_in - saldo_out),0) as total'))
                  ->where('id_user', $id_user)
                  ->where('created_at', '>', $tgl_terakhir)
                  ->first();

    $items = Pencairan::where('id_user', $id_user)
                        ->orderBy('id', 'DESC')
                        ->get();

    if ($saldo->total < 0) {
      $saldo = $total+$saldo->total;
    } else {
      $saldo = $saldo->total;
    }
    return view("penghasilan", [
      'buku'  => $buku->total,
      'saldo' => $saldo,
      'items' => $items
    ]);
  }

  public function ajukan()
  {
    $get_tgl = Pencairan::select('total', 'created_at')
                         ->where('id_user', session()->get('id'))
                         ->orderBy('id', 'DESC')
                         ->limit('1')
                         ->first();

    // echo $get_tgl->created_at; exit;
    if (empty($get_tgl)) {
      $total = 0;
      $tgl_terakhir = '1999-01-01 01:01:01';
    }else {
      $total = $get_tgl->total;
      $tgl_terakhir = $get_tgl->created_at;
    }

    $saldo = DB::table('saldo')
                  ->select(DB::raw('COALESCE(SUM(saldo_in - saldo_out),0) as total'))
                  ->where('id_user', session()->get('id'))
                  ->where('created_at', '>', $tgl_terakhir)
                  ->first();
    $total = $total + $saldo->total;
    if ($total > 0) {
      $data = [
          'id_user'      => session()->get('id'),
          'no_transaksi' => 'P'.time(),
          'total'        => $total,
          'ket'          => "Pencairan",
          'status'       => 0,
          'created_at'   => date('Y-m-d H:i:s')
      ];
      Pencairan::create($data);
    }
    return redirect('/penghasilan');
  }


// ADMIN -=============================
    public function admin_penarikan()
    {
        $items = Pencairan::join('user', 'user.id', '=', 'pencairan.id_user')
                            ->select('pencairan.*', 'user.name as nama_penjual')
                            ->orderBy('id', 'DESC')
                            ->get();
        return view("admin_penarikan", [
          'items'=>$items
        ]);
    }

    public function admin_confirm_penarikan($id)
    {
      Pencairan::where('no_transaksi', $id)->update(['status'=>1, 'tgl_confirm'=>date('Y-m-d H:i:s')]);
      $items = Pencairan::where('no_transaksi', $id)->first();
      $data = [
          'id_user'      => $items->id_user,
          'no_transaksi' => $id,
          'saldo_in'     => 0,
          'saldo_out'    => $items->total,
          'qty'          => 0,
          'ket'          => "Pencairan",
          'created_at'   => date('Y-m-d H:i:s')
      ];
      DB::table('saldo')->insert($data);
      return redirect('/admin-penarikan');
    }

}
