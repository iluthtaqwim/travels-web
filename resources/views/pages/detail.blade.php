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
                                Paket Travel
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
                        <h1>Nusa Penida</h1>
                        <p>Republic of Indonesia</p>

                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{ url('frontend/images/details-travel(1).jpg') }}" alt="details travels" class="xzoom" id="xzoom-default" xoriginal="{{ url('frontend/images/details-travel(2).jpg') }}">
                                <div class="xzoom-thums">
                                    <a href="{{ url('frontend/images/details-travel(12).jpg') }}">
                                        <img src="{{ url('frontend/images/details-travel(12).jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/details-travel(11).jpg') }}" alt="">
                                    </a>
                                    <a href="{{ url('frontend/images/details-travel(4).jpg') }}">
                                    <img src="{{ url('frontend/images/details-travel(4).jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/details-travel(3).jpg') }}" alt="">
                                    </a>
                                    <a href="{{ url('frontend/images/details-travel(6).jpg') }}">
                                        <img src="{{ url('frontend/images/details-travel(6).jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/details-travel(5).jpg') }}" alt="">
                                    </a>
                                    <a href="{{ url('frontend/images/details-travel(8).jpg') }}">
                                        <img src="{{ url('frontend/images/details-travel(8).jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/details-travel(7).jpg') }}" alt="">
                                    </a>
                                    <a href="{{ url('frontend/images/details-travel(10).jpg') }}">
                                        <img src="{{ url('frontend/images/details-travel(10).jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/details-travel(9).jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <h2>Tentang Wisata</h2>
                        <p>
                            Nusa Penida (Balinese) is an island southeast of Indonesia's island Bali and a district of 
                            Klungkung Regency that includes the neighbouring small island of Nusa Lembongan and
                            twelve even smaller islands. The Badung Strait separates the island and Bali. The interior
                            of Nusa Penida is hilly with a maximum altitude of 524 metres. It is drier than the nearby 
                            island of Bali. It is one of the major tourist attractions among the three Nusa islands.
                        </p>
                        <p>
                            There are thirteen small islands nearby  Nusa Lembongan, Nusa Ceningan and  eleven
                            even smaller - which are included  within the district (kecamatan).
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <div class="description">
                                    <img src="{{ url('frontend/images/Ic-event.png') }}" alt="" class="featured-image">
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="{{ url('frontend/images/Ic-language.png') }}" alt="" class="featured-image">
                                    <div class="description">
                                        <h3>Languages</h3>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="{{ url('frontend/images/Ic-foods.png') }}" alt="" class="featured-image">
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
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="{{ url('frontend/images/members-(2).png') }}" alt="" class="member-image mr-1">
                            <img src="{{ url('frontend/images/members-(4).png') }}" alt="" class="member-image mr-1">
                            <img src="{{ url('frontend/images/members-(6).png') }}" alt="" class="member-image mr-1">
                            <img src="{{ url('frontend/images/members-(8).png') }}" alt="" class="member-image mr-1">
                            <img src="{{ url('frontend/images/members-(9).png') }}" alt="" class="member-image mr-1">
                            <img src="{{ url('frontend/images/membersplus.png') }}" alt="" class="member-image mr-1">
                        </div>
                        <hr>
                        <h2>Trip Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td widht="50%" class="text-right"> 22 Aug, 2022</td>
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
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                            Join Now
                        </a>
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
        $(document).ready(function(){
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

