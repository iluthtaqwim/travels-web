@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tentang Kami</h1>

        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" value="{{ $datas->title }}" name="title"
                            placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="title">Deskripsi</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ $datas->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="title">Contact Person</label>
                        <input type="text" class="form-control" value="{{ $datas->contact }}" name="contact"
                            placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="title">Alamat</label>
                        <input type="text" class="form-control" value="{{ $datas->address }}" name="address"
                               placeholder="alamat">
                    </div>

                    <div class="form-group">
                        <label for="title">Link Google Maps</label>
                        <br>
                        <small style="color: darkorange">Cara mengisi link : Kunjungi maps.google.com, cari titik kantor anda, klik bagikan, pilih sematkan peta, lalu salin HTML</small>
                        <input type="text" class="form-control" value="{{ $datas->maps }}" name="maps"
                               placeholder="link google maps">
                    </div>


                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {

            $('#description').summernote({

                height: 300,

            });

        });
    </script>
    <!-- /.container-fluid -->
@endsection
