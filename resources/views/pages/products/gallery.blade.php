@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                @if (session('sukses'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-check-circle"></i> 
                    {{session('sukses')}}
                </div>
                @endif
                @if (session('hapus'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-check-circle"></i> 
                    {{session('hapus')}}
                </div>
                @endif
                <div class="card-body">
                    <h4 class="box-title">Daftar Barang <strong>{{$product->name}}</strong></h4>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Foto</th>
                                    <th>Default</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no= 1 ?>
                               @forelse ($items as $item)
                               <tr>
                                <td>{{$no}}</td>
                                <td>{{$item->product->name}}</td>
                                <td>
                                    <img src="{{url($item->photo)}}" alt="">    
                                </td>
                                <td>{{$item->is_default ? 'Ya' : 'Tidak'}}</td>
                                <td>
                                    <form action="{{route('product-galleries.destroy', $item->id)}}" method="POST" class="d-inline" onclick="return confirm('yakin produk ingin dihapus?') ">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    </form>
                                </td>
                                <?php $no++?>
                            </tr>
                               @empty
                                   <tr>
                                       <td colspan="6" class="text-center">
                                           Data Product Kosong
                                       </td>
                                   </tr>
                               @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection