<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phoneNum',
    ];

    public function bookList(){
        return $this->belongsToMany(Book::class, 'book_warehouses', 'book_id', 'warehouse_id');
    }
}
