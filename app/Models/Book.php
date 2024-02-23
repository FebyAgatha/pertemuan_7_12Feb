<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'bookTitle',
        'publisherId',
        'author',
        'price',
        'releaseDate',
    ];

    public function publisher(){
        return $this->belongsTo(Publisher::class, 'publisherId');
    }

    public function warehouseList(){
        return $this->belongsToMany(Warehouse::class, 'book_warehouses', 'book_id', 'warehouse_id');
    }

}
