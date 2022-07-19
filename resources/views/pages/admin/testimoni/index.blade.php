@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Testimoni</h1>
        <a href="{{ route('testimoni.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-center-50"></i> Tambah Testimoni
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Testimoni</td>
                            <td>Alamat</td>
                            <td>Foto</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($items as $item)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->kecamatan->nama . ', '. $item->kecamatan->kabupaten->nama }}</td>
                                <td><img src="{{ asset('storage/testimoni/'.$item->photo) }}" style="width:150px"> </td>

                                <td>
{{--                                    <a href="{{ route('testimoni.show', $item->id) }}" class="btn btn-primary">--}}
{{--                                        <i class="fa fa-eye"></i>--}}
{{--                                    </a>--}}

                                    <a href="{{ route('testimoni.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>

                                    <form action="{{ route('testimoni.destroy', $item->id) }}" class="d-inline" method="POST">
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
<!-- /.container-fluid -->
@endsection
