<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'price', 'cate_id', 'image' ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
