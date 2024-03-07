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

        $request->validate([
            'namaPublisher' => 'required|regex:/^08[0-9]+$/',
            'image' => 'required|file|min:12|mimes:png,jpg,jpeg',
            'email' => 'required|email:rfc,dns'
        ]);

        // download1.png
        // Feby.png
        // storeAs -> public storage --> biar bisa diakses assetnya
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->namaPublisher.".".$extension;
        // filename -> namaPenerbit.extensi
        $request->file('image')->storeAs('/public/images', $filename);

        Publisher::create([
            'publisherName' => $request->namaPublisher,
            'image' => $filename,
            'email' => $request->email,
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
