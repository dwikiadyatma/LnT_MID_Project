<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BukuRequest;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function create(BukuRequest $request){
        Book::create([
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Halaman' => $request->Halaman,
            'Tahun' => $request->Tahun
        ]);
        return redirect(route('home'))->with('success','Buku berhasil dibuat');
    }
    public function CreateView(){
        return view('CRUD.create');
    }
    public function ViewAll(){
        $books = Book::all();
        return view('CRUD.view', ['datas' => $books]);
    }
    public function UpdateForm($id){
        $book = Book::where('id', '=', $id)->first();
        return view('CRUD.update', ['buku' => $book]);
    }

    public function Update(BukuRequest $request, $id){
        $BookIDUpdate = Book::find($id);

        $BookIDUpdate->Update([
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Halaman' => $request->Halaman,
            'Tahun' => $request->Tahun
        ]);
        return redirect(route('viewAll'));

    }
    public function Delete($id){
        $book = Book::find($id);
        $book->delete();
        return redirect(route('ViewAll'))->with('success', 'Buku berhasil dihapus');
    }
}

