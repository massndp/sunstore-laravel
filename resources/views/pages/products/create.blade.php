@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="card-shadow">
            <div class="card-header">
                <strong>Tambah Barang</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{route('products.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Barang</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                        @error('name') <div class="text-muted">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">Tipe Barang</label>
                        <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{old('type')}}">
                        @error('type') <div class="text-muted">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Harga Barang</label>
                        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">
                        @error('price') <div class="text-muted">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi Barang</label>
                        <textarea name="description" rows="10" class="form-control ckeditor @error('description') is-invalid @enderror "></textarea>
                        @error('description') <div class="text-muted">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="quantity">Jumlah Barang</label>
                        <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{old('quantity')}}">
                        @error('quantity') <div class="text-muted">{{$message}}</div> @enderror
                    </div>
                    <button class="btn btn-primary btn-block">
                        Tambah Barang
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection