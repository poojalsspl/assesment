<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'pro_name', 
        'pro_desc',
        'pro_price',
        'catg_code',
        'image',
    ];

    public function category(){
        return $this->belongsTo(Category::class,'catg_code','catg_code')->withDefault([
            'catg_name' => ' '
        ]);
    }
}


