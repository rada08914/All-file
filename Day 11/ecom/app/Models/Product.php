<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='products';
    protected $fillable =[
    'name',
    'price',
    'category',
    'description',
    'seller_name',
    'rating',
    'created_at',
    'updated_at',
    'deleted_at'
    ];
}
