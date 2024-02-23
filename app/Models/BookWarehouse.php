<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookWarehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'warehouse_id',
    ];

}
