@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kavling</h1>
        <a href="{{ route('kavling.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-center-50"></i> Tambah Kavling
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
                            <td>Deskripsi</td>
                            <td>Harga</td>
                            <td>Denah</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($items as $item)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <img src="{{ asset('storage/denah/'.$item->denah) }}" alt="" style="width:150px" class="img-thumbnail"/>
                                </td>
                                <td>
                                    <a href="{{ route('kavling.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>

                                    <form action="{{ route('kavling.destroy', $item->id) }}" class="d-inline" method="POST">
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
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<!-- /.container-fluid -->
@endsection
