<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
    public function AddBook() {
        return view('addBook');
    }

    public function StoreBook(Request $request) {

        Book::create([
            'bookTitle' => $request->judulBuku,
            'author' => $request->author,
            'price' => $request->harga,
            'releaseDate' => $request->tanggalRilis,
        ]);
        return redirect('/');
    }

    public function ViewAllBook() {
        $books = Book::all();

        return view('welcome')->with('buku_buku', $books);
    }

    public function ViewBook($id){
        $book = Book::findOrFail($id);

        return view('bookDetail')->with('buku', $book);
    }

    public function viewUpdateBook($id){
        $book = Book::findOrFail($id);

        return view('updateBook')->with('buku', $book);
    }

    public function saveUpdate($id, Request $request){
        $book = Book::findOrFail($id)->update([
            'bookTitle' => $request->judulBuku,
            'author' => $request->author,
            'price' => $request->harga,
            'releaseDate' => $request->tanggalRilis,
        ]);
        return redirect('/');
    }

    public function deleteBook($id){
        Book::destroy($id);

        return redirect('/');
    }

}
