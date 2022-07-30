@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Banner</h1>
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
                <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="form-group">
                        <label for="title">Sub Judul</label>
                        <input type="text" class="form-control" name="subtitle">
                    </div>

                    <div class="form-group">
                        <label for="title">Link</label>
                        <input type="text" class="form-control" name="link">
                    </div>

                    <div class="form-group">
                        <label for="image">Banner</label>
                        <input type="file" accept="image/*" class="form-control" name="image" placeholder="image">
                    </div>
                    <hr>

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
                disableResizeEditor: true,
                height: 300,

            });
            $('.note-statusbar').hide();

            $('#spesification').summernote({

                height: 100,
                disableResizeEditor: true,
            });

        });
    </script>
    <!-- /.container-fluid -->
    <script type="text/javascript">
        function readURL(input) {
            if (input.target.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.target.files[0]);
            }
        }

        $("#image").change(function() {
            console.log('cek');
            readURL(this);
        });
    </script>
@endsection
