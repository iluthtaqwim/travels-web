@extends('layouts.app')

@section('title', 'Detail Travels')

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
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1 style="margin-bottom: 2%">{{ $detail->title }}</h1>
                            <p style="margin-bottom: 2%">
                                {{ 'Kec. ' . $address->nama . ', ' . $address->kabupaten->nama . ', ' . $address->kabupaten->provinsi->nama }}
                            </p>

                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="{{ asset('storage/denah/' . $detail->denah) }}" alt="details travels"
                                        class="xzoom" id="xzoom-default"
                                        xoriginal="{{ asset('storage/denah/' . $detail->denah) }}">
                                    <div class="xzoom-thums">
                                        @foreach ($images as $image)
                                            <a href="{{ asset('storage/denah/' . $image->image) }}">
                                                <img src="{{ asset('storage/denah/' . $image->image) }}"
                                                    class="xzoom-gallery" width="128"
                                                    xpreview="{{ asset('storage/denah/' . $image->image) }}"
                                                    alt="">
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <h2>Deskripsi</h2>
                            <br>
                            @php echo $detail->description; @endphp
                            <br>

                            <div class="features row">
                                <div class="col-md-4">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/Ic-event.png') }}" alt=""
                                            class="featured-image">
                                        <div class="description">
                                            <h3>Featured Event</h3>
                                            <p>Tari Kecak</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/Ic-language.png') }}" alt=""
                                            class="featured-image">
                                        <div class="description">
                                            <h3>Languages</h3>
                                            <p>Bahasa Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/Ic-foods.png') }}" alt=""
                                            class="featured-image">
                                        <div class="description">
                                            <h3>Foods</h3>
                                            <p>Local foods</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            {{-- <h2>Members are going</h2>
                            <div class="members my-2">
                                <img src="{{ url('frontend/images/members-(2).png') }}" alt=""
                                    class="member-image mr-1">
                                <img src="{{ url('frontend/images/members-(4).png') }}" alt=""
                                    class="member-image mr-1">
                                <img src="{{ url('frontend/images/members-(6).png') }}" alt=""
                                    class="member-image mr-1">
                                <img src="{{ url('frontend/images/members-(8).png') }}" alt=""
                                    class="member-image mr-1">
                                <img src="{{ url('frontend/images/members-(9).png') }}" alt=""
                                    class="member-image mr-1">
                                <img src="{{ url('frontend/images/membersplus.png') }}" alt=""
                                    class="member-image mr-1">
                            </div> --}}
                            <hr>
                            <h2>Informasi Kavling</h2>
                            <h5><b>Lokasi</b></h5>
                            <p> <i class="fa fa-map-marker" aria-hidden="true"></i>
                                {{ 'Kec. ' . $address->nama . ', ' . $address->kabupaten->nama . ', ' . $address->kabupaten->provinsi->nama }}
                            </p>
                            <h5><b>Spesifikasi</b></h5>
                                @php echo $detail->spesification; @endphp

                            <h5><b>Link Google Maps</b></h5>
                            <p> <i class="fa fa-map" aria-hidden="true"></i>
                                <a href="{{ $detail->location }}" target="_blank"
                                    rel="noopener noreferrer">{{ $detail->location }}</a>
                            </p>
                            <h5><b>Harga</b></h5>
                            <p style="font-size: 20px; color: rgb(204, 141, 23)">
                                <strong> Rp {{ $detail->price }}</strong>
                            </p>
                            {{-- <table class="trip-informations">
                                <tr>
                                    <th width="5%">Lokasi</th>
                                    <td> {{ 'Kec. ' . $address->nama . ', ' . $address->kabupaten->nama . ', ' . $address->kabupaten->provinsi->nama }}
                                    </td>
                                </tr>
                                <tr>


                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td widht="50%" class="text-right"> 5D 4N</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td widht="50%" class="text-right"> Open Trip</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td widht="50%" class="text-right"> $199,00 / Person</td>
                                </tr>
                            </table> --}}
                        </div>
                        <div class="join-container">
                            <h5><b>Klik untuk info selengkapnya</b></h5>
                            <a href="https://api.whatsapp.com/send/?phone=62{{ $whatsapp->contact }}&text&type=phone_number&app_absent=0"
                                target="_blank" rel="noopener noreferrer"> <button type="button" class="btn btn-success"><i
                                        class="fa fa-whatsapp" aria-hidden="true"></i>
                                    Whatsapp</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                zoomHeight: 282,
                title: false,
                tint: '#333',
                xoffset: 15,
            });
        });
    </script>
@endpush
