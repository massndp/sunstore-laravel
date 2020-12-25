@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="card-shadow">
            <div class="card-header">
                <strong>Tambah Barang</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{route('transactions.update', $item->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Barang</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$item->name}}">
                        @error('name') <div class="text-muted">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$item->email}}">
                        @error('email') <div class="text-muted">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="number">Nomor Telp</label>
                        <input type="text" name="number" class="form-control @error('number') is-invalid @enderror" value="{{$item->number}}">
                        @error('number') <div class="text-muted">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Jumlah Barang</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{$item->address}}">
                        @error('address') <div class="text-muted">{{$message}}</div> @enderror
                    </div>
                    <button class="btn btn-primary btn-block">
                        Tambah Barang
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection