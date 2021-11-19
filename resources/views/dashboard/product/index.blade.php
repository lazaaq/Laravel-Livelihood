@extends('layouts.app')

@section('css')
    
@endsection

@section('content')
<section class="content">
    <div class="container">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="card card-light mt-5">
            <div class="card-header d-flex align-items-center">
                <div class="fs-4" style="font-weight: 600">Semua Product</div>
                <div class="ms-auto">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah Product</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $product->name }}</td>
                        <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                        <td class="d-flex align-items-center">
                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-info me-2"><i class="bi bi-eye text-light"></i></a>
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning me-2"><i class="bi bi-pencil text-light"></i></a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" style="width: fit-content" data-bs-toggle="modal" data-bs-target="#{{ 'hapus_' . $product->id }}">
                                <i class="bi bi-trash"></i>
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="{{ 'hapus_' . $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus produk ini?
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
    
@endsection