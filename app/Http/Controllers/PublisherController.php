<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    //
    public function viewAddPublisher(){

        return view('addPublisher');
    }

    public function storePublisher(Request $request){
        Publisher::create([
            'publisherName' => $request->namaPenerbit,
        ]);
        return redirect('/');
    }

    public function show(){
        $publishers = Publisher::all();

        return view('showPublisher')->with('penerbit_penerbit', $publishers);
    }

    public function detail($id){
        $publisher = Publisher::findOrFail($id);

        return view('publisherDetail')->with('penerbit', $publisher);
    }

    public function delete($id){
        Publisher::destroy($id);

        return redirect('/');
    }
}
