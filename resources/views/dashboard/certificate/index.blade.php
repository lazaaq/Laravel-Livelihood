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
        <div class="card card-light my-5">
            <div class="card-header d-flex align-items-center">
                <div class="fs-4" style="font-weight: 600">Semua Sertifikat</div>
                <div class="ms-auto">
                    <a href="{{ route('certificate.create') }}" class="btn btn-primary">Tambah Sertifikat</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Produk</th>
                        <th>Lihat</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($certificates as $certificate)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $certificate->title }}</td>
                        <td>{{ $certificate->product->name }}</td>
                        <td>
                            <a href="/certificate/{{ $certificate->slug }}" class="btn btn-info text-light">Lihat</a>
                        </td>
                        <td class="d-flex align-items-center">
                            <a href="{{ route('certificate.show', $certificate->id) }}" class="btn btn-info me-2"><i class="bi bi-eye text-light"></i></a>
                            <a href="{{ route('certificate.edit', $certificate->id) }}" class="btn btn-warning me-2"><i class="bi bi-pencil text-light"></i></a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" style="width: fit-content" data-bs-toggle="modal" data-bs-target="#{{ 'hapus_' . $certificate->id }}">
                                <i class="bi bi-trash"></i>
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="{{ 'hapus_' . $certificate->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus produk ini?
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('certificate.destroy', $certificate->id) }}" method="post">
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