<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $table = 'categories';
    protected $fillable = ['nama'];

    public function galeries()
    {
        return $this->hasMany(Portofolio::class, 'category_id');
    }
}
