@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')

    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Kavling
                                </li>
                                <li class="breadcrumb-item active">
                                    Kontak kami
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 pl-lg-0">
                        <div class="card card-details">
                            <h1>Kontak Kami</h1>
                            <br>
                            <h4>Kantor Kami</h4>
                            <hr style="border-color: darkgray;">
                            <b>CV. Mandiri Jaya Group</b>
                            <p>{{$about->address}}</p>
                            <br>
                            <b>Hubungi melalui Whatsapp :</b>
                            <p>{{$about->contact}}</p>
                            <br>
                            @php echo $about->maps; @endphp
                        </div>
                    </div>
                    <div class="col-lg-4 pl-lg-0">
                        <br>
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        <br>
                        <h3>HUBUNGI KAMI</h3>
                        <br>
                        <p style="color: gray">
                            Apakah Anda mencari informasi tentang siapa kami dan apa yang kami lakukan secara lengkap,
                            atau memiliki pertanyaan lain? Jangan merasa ragu atau sungkan untuk menghubungi kami
                            melalui telepon atau cukup melengkapi kolom pada formulir email di bawah ini.
                        </p>
                        <br>
                        <form action="{{route('send_email')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" placeholder="Nomor Handphone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required placeholder="Alamat Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Judul Pesan">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Isi Pesan Anda"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning btn-block">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/Ic-calender.png') }}"/>'
                }
            })
        });
    </script>
@endpush
