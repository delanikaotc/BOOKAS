<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Rekening extends Model
{
    protected $table = "rekening";

    protected $fillable=[
        'iduser','namaBank','noRekening'
    ];

    public function user(){
        return $this->belongsTo(User::class,'iduser','id');
    }
}
