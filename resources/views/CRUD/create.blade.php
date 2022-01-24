@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Perpustakan') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('add') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Judul Buku') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="Judul" placeholder="Judul Buku">

                                @error('Judul')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="penulis" class="col-md-4 col-form-label text-md-right">{{ __('Penulis Buku') }}</label>

                            <div class="col-md-6">
                                <input id="Penulis" type="text" class="form-control" name="Penulis" placeholder="Penulis buku">

                                @error('Penulis')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Halaman" class="col-md-4 col-form-label text-md-right">{{ __('Halaman') }}</label>

                            <div class="col-md-6">
                                <input id="Halaman" type="number" class="form-control" name="Halaman" placeholder="Halaman">

                                @error('Halaman')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tahun" class="col-md-4 col-form-label text-md-right">{{ __('Tahun terbit') }}</label>

                            <div class="col-md-6">
                                <input id="Tahun" type="number" class="form-control" name="Tahun" placeholder="Tahun terbit">

                                @error('Tahun')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
