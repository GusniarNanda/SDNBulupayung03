<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','description','image','category_id'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'category_id');
    }
}
