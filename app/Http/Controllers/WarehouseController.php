<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;
use App\Models\Book;
use App\Models\BookWarehouse;

class WarehouseController extends Controller
{
    //
    public function viewAddWarehouse(){
        return view('addWarehouse');
    }

    public function store(Request $req){
        Warehouse::create([
            'address' => $req->alamat,
            'phoneNum' => $req->noTelp,
        ]);

        return redirect('/');
    }

    public function viewBookToWh($id){
        $book = Book::findOrFail($id);
        $warehouses = Warehouse::all();

        return view('addBookWh')->with('buku', $book)->with('warehouses', $warehouses);
    }

    public function storeBookToWh($id, Request $req){

        BookWarehouse::create([
            'book_id' => $req->idBuku,
            'warehouse_id' => $req->WH,
        ]);

        return redirect('/');
    }

    public function detail(){
        $warehouses = Warehouse::with('bookList')->get();

        return view('warehouseDetail')->with('warehouses', $warehouses);
    }
}
