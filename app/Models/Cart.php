<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Cart extends Model
{
    protected $table = "cart";

    protected $fillable=[
        'id_pembeli','id_penjual','id_product'
    ];

    public function user(){
        return $this->belongsTo(User::class,'id_pembeli','id');
    }
}
