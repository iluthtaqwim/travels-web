@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Testimoni</h1>
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
                <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Nama</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="title">Deskripsi</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="location">Kecamatan</label>
                        <select name="address" class="form-control" id="kecamatan">
                            <option value="">-- Silahkan pilih kecamatan --</option>
                            @foreach ($kecamatan as $kec)
                                <option value="{{ $kec->id }}">{{ $kec->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="image">Foto</label>
                        <input type="file" accept="image/*" class="form-control" name="photo" placeholder="image">
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
