@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="card-shadow">
            <div class="card-header">
                <strong>Tambah Barang</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{route('product-galleries.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="products_id">Nama Barang</label>
                        <select name="products_id" class="form-control @error('products_id') is-invalid @enderror" required>
                            <option value="">Pilih Barang</option>
                            @foreach ($product as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        @error('name') <div class="text-muted">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="photo">Tipe Barang</label><br>
                        <input type="file" name="photo" class=" @error('photo') is-invalid @enderror" value="{{old('photo')}}" accept="image/*" required>
                        @error('photo') <div class="text-muted">{{$message}}</div> @enderror
                    </div>
                   <div class="form-group">
                       <label for="is_default">Jadikan Default</label>
                        <br>
                        <label>
                            <input type="radio" name="is_default" class="form-control @error('is_default') is-invalid @enderror" value="1"/> Ya
                        </label>
                        &nbsp;
                        <label>
                            <input type="radio" name="is_default" class="form-control @error('is_default') is-invalid @enderror" value="0"/> No
                        </label>
                        @error('is_default') <div class="text-muted">{{$message}}</div> @enderror
                    </div>
                    <button class="btn btn-primary btn-block">
                        Tambah Foto Barang
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection