@extends('layouts.app')

@section('css')
    
@endsection

@section('content')
<section class="content">
    <div class="container">
        <div class="card card-light my-5">
            <div class="card-header">
                Detail Sertifikat
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-2">
                        Judul Sertifikat
                    </div>
                    <div class="col-md-10">
                        <b>{{ $certificate->title }}</b>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        Slug Sertifikat
                    </div>
                    <div class="col-md-10">
                        <b>{{ $certificate->slug }}</b>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        Deskripsi Sertifikat
                    </div>
                    <div class="col-md-10">
                        <b>{{ $certificate->deskripsi }}</b>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        Gambar Sertifikat
                    </div>
                    <div class="col-md-10">
                        <img src="{{ asset($certificate->image) }}" alt="{{ $certificate->title }}" class="img-thumbnail" style="width:500px">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('certificate.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('#imgPreview');

        imgPreview.style.display = 'block';
        $('.image-form').css('margin-left', 'auto');

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection