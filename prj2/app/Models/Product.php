<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'cate_id', 'image' ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
