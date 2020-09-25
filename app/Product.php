<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id','nama_pengadaan','jenis_aset','spesifikasi','penerima', 'qty'];

    protected $hidden = ['updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
