@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Kavling</h1>
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
            <form action="{{ route('kavling.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
            @csrf
        
                <div class="form-group">
                    <label for="kavling_id">Judul</label>
                   <input type="text" name="title" class="form-control" placeholder="judul" value="{{ $item->title }}">
                </div>

                <div class="form-group">
                    <label for="title">Deskripsi</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10" >{{ $item->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="title">Harga</label>
                    <input type="text" class="form-control" name="price" value="{{ $item->price }}">
                </div>

                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" accept="image/*" name="denah" placeholder="image">
                </div>
                <div class="form-group">
                    <img src="{{ asset('storage/'.$item->denah) }}" style="width:150px" alt="">
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection