<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Order extends Model
{
    protected $table = "order";

    protected $fillable=[
        'no_transaksi','id_penjual','id_pembeli','id_product',
        'nama_penjual','nama_penjual','name','price','image','tgl_terbit',
        'penerbit','deskripsi','kondisi','penulis','status','foto_bukti','tgl_bukti',
        'tgl_confirm_admin','tgl_confirm_pengiriman','tgl_confirm_selesai'
    ];

    public function user(){
        return $this->belongsTo(User::class,'id_product','id');
    }
}
