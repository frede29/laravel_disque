<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disques extends Model
{
    protected $table = 'table_disques';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'title',
        'code',
        'author',
        'description',
        'price',
        'image',
        'category_id'
    ];

}
