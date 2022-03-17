<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'categories';
    protected $primaryKey = 'catg_code';

    protected $fillable = [
        'catg_name', 
        'catg_desc'    
    ];

    public function products(){
        return $this->hasMany(Product::class,'catg_code','catg_code');
    }

    
}
