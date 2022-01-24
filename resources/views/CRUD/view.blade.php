@extends('layouts.app')

@section('content')
@if ($datas->count() > 0)
    <div class="container" style="margin-top: 25px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Penulis Buku</th>
                            <th scope="col">Halaman</th>
                            <th scope="col">Tahun terbit</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $book)
                            <tr>
                                <td scope="col">{{$book->id}}</td>
                                <td scope="col">{{$book->Judul}}</td>
                                <td scope="col">{{$book->Penulis}}</td>
                                <td scope="col">{{$book->Halaman}}</td>
                                <td scope="col">{{$book->Tahun}}</td>
                                <td>
                                <a class="btn-danger btn " href=" {{ route ('ShowForm', $book->id) }}">
                                        Update
                                    </a>
                                </td>
                                <td>
                                    <form method="post" enctype="multipart/form-data" action="{{ Route ('DeleteBuku', $book->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn-danger btn">Delete</button>
                                    </form>
                                </td>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
<h1 style="font-weight: bolder"  class="text-center">Tidak ada buku yang tersedia</h1>
@endif
@endsection
