@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Banner</h1>
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
                <form action="{{ route('banner.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="kavling_id">Judul</label>
                        <input type="text" name="title" class="form-control" placeholder="judul"
                            value="{{ $item->title }}">
                    </div>

                    <div class="form-group">
                        <label for="title">Sub Judul</label>
                        <input type="text" name="subtitle" class="form-control" placeholder="subtitle"
                               value="{{ $item->subtitle }}">
                    </div>

                    <div class="form-group">
                        <label for="title">Link</label>
                        <input type="text" class="form-control" name="link" value="{{ $item->link }}">
                    </div>

                    <div class="form-group">
                        <label for="image">Banner</label>
                        <input type="file" class="form-control" accept="image/*" name="image" placeholder="image">
                    </div>

                    <div class="form-group">
                        <img src="{{ asset('storage/banner/' . $item->image) }}" style="width:150px" alt="">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
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
            $('#spesification').summernote({

                height: 300,

            });

            // $('#kecamatan').change(function() {
            //     $('#desa').removeAttr('disabled');
            //     var url = "{{ url('admin/desa') }}";
            //     var id = $('#kecamatan').val();
            //     $.ajax({
            //         url: url,
            //         type: "post",
            //         data: {
            //             id: id
            //         },
            //         success: function(data, status) {
            //             console.log(data);
            //         }

            //     });
            // $.post(url, {
            //     id: id
            // }, function(data) {
            //     $("#desa").html(data);
            // });
        });
    </script>

    <!-- /.container-fluid -->
@endsection
