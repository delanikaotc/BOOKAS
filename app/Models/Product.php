<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Product extends Model
{
    protected $table = "product";

    protected $fillable=[
        'name','price','image','tgl_terbit','penerbit','deskripsi','kondisi','penulis','id_user'
    ];

    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }

    

}
