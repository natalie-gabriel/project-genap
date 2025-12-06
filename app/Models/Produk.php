<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model 
{ 
    protected $guarded = []; 

    // Relasi ke Kategori (Biar pas Read nama kategorinya muncul)
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}