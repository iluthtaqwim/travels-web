@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Gallery Travel</h1>
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
            <form action="{{ route('kavling.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <label for="title">Deskripsi</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="title">Harga</label>
                    <input type="text" class="form-control" name="price">
                </div>

                <div class="form-group">
                    <label for="image">Denah</label>
                    <input type="file" accept="image/*" class="form-control" name="denah" placeholder="image">
                </div>
                <hr>
                <label for="image">Gambar Lokasi</label>
                <div class="row">
               
            
                <div class="col-xs-12 col-md-2 mx-4">
                    <div class="form-group">
                        <input type="file" class="custom-file-input" id="customFile" accept="image/*" id="location1" name="location1" placeholder="image">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>  
                    <div class="col-md-12 mb-2">
                        <img id="preview-image-before-upload" src="https://www.xylemanalytics.com/Image%20Library/template-images/noImage-lg.gif"
                            alt="preview image" style="max-height: 200px;">
                    </div>
                </div>

                <div class="col-xs-12 col-md-2 mx-4">
                    <div class="form-group">
                        <input type="file" accept="image/*" class="custom-file-input" name="location2" placeholder="image">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>  
                </div>

                <div class="col-xs-12 col-md-2 mx-4">
                    <div class="form-group">
                        
                        <input type="file" accept="image/*" class="custom-file-input" name="location3" placeholder="image">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>  
                </div>

                <div class="col-xs-12 col-md-2 mx-4">
                    <div class="form-group">
                        <input type="file" class="custom-file-input" id="customFile" accept="image/*" name="location4" placeholder="image">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>  
                </div>
            </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
      
    $(document).ready(function (e) {
     
       
       $('#location1').change(function(){
                
        let reader = new FileReader();
     
        reader.onload = (e) => { 
     
          $('#preview-image-before-upload').attr('src', e.target.result); 
        }
     
        reader.readAsDataURL(this.files[0]); 
       
       });
       
    });
     
    </script>