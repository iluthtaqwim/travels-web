@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Banner</h1>
            <a href="{{ route('banner.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-center-50"></i> Tambah Banner
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Judul</td>
                                <td>Sub Judul</td>
                                <td>Link</td>
                                <td>Banner</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($list_banner as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->subtitle }}</td>
                                    <td>{{ $item->link }}</td>
                                    <td>
                                        <img src="{{ asset('storage/banner/' . $item->image) }}" alt=""
                                            style="width:150px" class="img-thumbnail" />
                                    </td>
                                    <td>
                                        <a href="{{ route('banner.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>

                                        <form action="{{ route('banner.destroy', $item->id) }}" class="d-inline"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Data kosong
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <!-- /.container-fluid -->
@endsection
