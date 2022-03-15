<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'context',
        'product_name',
        'product_description',
        'sku',
        'is_enabled',
        'price',
        'special_price',
        'is_taxable_goods_applied',
        'product_tax',
        'track_inventory',
        'quantity',
        'stock_availability',
        'discount',
        'image',
        'weight',
        'barcode',
        'product_category',
        'options',
        'cartQty',
        'cartProductSubtotal'

    ];
}
