<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    //
    public function viewAll(){
        $books = Book::all();

        if($books->count() > 0){
            return response()->json([
                "status" => "200",
                "books" => $books
            ], 200);
        } else {
            return response()->json([
                "status" => "404",
                "error_message" => "Book not found"
            ], 404);
        } 
    }

    public function create(Request $req){
        $validate = Validator::make($req->all(), [
            'bookTitle' => "required",
            'publisherId' => "required",
            'author' => "required",
            'price' => "required",
            'releaseDate' => "required",
        ]);

        if($validate->fails()){
            return response()->json([
                "status" => "422",
                "error_message" => $validate->messages()
            ], 422);
        } else {
            Book::create([
                'bookTitle' => $req->bookTitle,
                'publisherId' => $req->publisherId,
                'author' => $req->author,
                'price' => $req->price,
                'releaseDate' => $req->releaseDate,
            ]);

            return response()->json([
                "status" => "200",
                "message" => "Book has been created" 
            ], 200);
        }
    }

    public function update($id, Request $req){
        $validate = Validator::make($req->all(), [
            'bookTitle' => "required",
            'publisherId' => "required",
            'author' => "required",
            'price' => "required",
            'releaseDate' => "required",
        ]);

        if($validate->fails()){
            return response()->json([
                "status" => "422",
                "error_message" => $validate->messages()
            ], 422);
        }

        $book = Book::find($id);

        if($book){
            $book->update([
                'bookTitle' => $req->bookTitle,
                'publisherId' => $req->publisherId,
                'author' => $req->author,
                'price' => $req->price,
                'releaseDate' => $req->releaseDate,
            ]);

            return response()->json([
                "status" => "200",
                "message" => "Book has been updated"
            ], 200);
        } else {
            return response()->json([
                "status" => "404",
                "error_message" => "Book not found"
            ], 404);
        }
    }

    public function delete($id){
        $book = Book::find($id);

        if($book){
            Book::destroy($id);

            return response()->json([
                "status" => "200",
                "message" => "Book has been deleted",
                "jhwafk" => "awkrghkawg"
            ], 200);
        } else {
            return response()->json([
                "status" => "404",
                "error_message" => "Book not found"
            ], 404);
        }
    }

    public function show($id){
        $book = Book::find($id);

        if($book){
            return response()->json([
               "status" => "200",
               "book" => $book, 
            ]);
        } else {
            return response()->json([
                "status" => "404",
                "error_message" => "Book not found"
            ], 404);
        }

    }




}
