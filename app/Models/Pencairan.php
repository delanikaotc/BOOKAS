<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Pencairan extends Model
{
    protected $table = "pencairan";

    protected $fillable=[
        'id_user','no_transaksi','total','ket','status'
    ];

    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }
}
