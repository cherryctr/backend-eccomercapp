<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $fillable = [
        'id',
        'productName',
        'productCategory',
        'productShortDescription',
        'productPrice',
        'productSalePrice',
        'productImage',
        'productType',
        'productStatus',
        'stockStatus',
        'productQty',
    ];


     public function category()
    {
        return $this->hasMany(CategoryModel::class,'id','productCategory');
    }
}