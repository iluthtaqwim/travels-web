@extends('layouts.app')

@section('title', 'CV Mandiri Jaya Group')

@section('content')
    <!-- header -->
    <!-- Banner -->
    <section class="tm-banner">
        <!-- Flexslider -->
        <div class="flexslider flexslider-banner">
            <ul class="slides">
                @foreach($banner as $ban)
                    <li>
                        <div class="tm-banner-inner">
                            <h1 class="tm-banner-title">{{$ban->title}}</h1>
                            <p class="tm-banner-subtitle">{{$ban->subtitle}}</p>
                            @if($ban->link == '' || $ban->link == null)
                                <a href="#more" class="tm-banner-link">Selengkapnya</a>
                            @else
                                <a href="{{$ban->link}}" target="_blank" class="tm-banner-link">Selengkapnya</a>
                            @endif
                        </div>
                        <img src="{{ asset('storage/banner/'. $ban->image) }}" alt="Image"/>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <!-- gray bg -->
    <section class="container tm-home-section-1" id="more">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <!-- Nav tabs -->
                <div class="tm-home-box-1">
                    <ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
                        <li role="presentation" class="active">
                            <a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Filter Kavling</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
                            <div class="tm-search-box effect2">
                                <form action="{{route('filter')}}" method="get" class="hotel-search-form">

                                    <div class="tm-form-inner">
                                        <div class="form-group">
                                            <select name="kecamatan" class="form-control">
                                                <option value="">-- Pilih Lokasi --</option>
                                                @foreach($kecamatan as $lokasi)
                                                    <option value="{{$lokasi->id}}" }}>{{$lokasi->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" name="created_at"
                                                       placeholder="Tanggal upload"/>
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Harga mulai dari"
                                                   name="range_start">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Harga maksimal"
                                                   name="range_end">
                                        </div>
                                    </div>
                                    <div class="form-group tm-yellow-gradient-bg text-center">
                                        <button type="submit" name="submit" class="tm-yellow-btn">Check Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade tm-white-bg" id="car">
                            <div class="tm-search-box effect2">
                                <form action="#" method="post" class="hotel-search-form">
                                    <div class="tm-form-inner">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="">-- Select Model --</option>
                                                <option value="shangrila">BMW</option>
                                                <option value="chatrium">Mercedes-Benz</option>
                                                <option value="fourseasons">Toyota</option>
                                                <option value="hilton">Honda</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date-time' id='datetimepicker3'>
                                                <input type='text' class="form-control" placeholder="Pickup Date"/>
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date-time' id='datetimepicker4'>
                                                <input type='text' class="form-control" placeholder="Return Date"/>
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="">-- Options --</option>
                                                <option value="">Child Seat</option>
                                                <option value="">GPS Navigator</option>
                                                <option value="">Insurance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group tm-yellow-gradient-bg text-center">
                                        <button type="submit" name="submit" class="tm-yellow-btn">Check Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($listsKavling as $list)
                <div style="margin-bottom: 8%;" class="col-lg-4 col-md-4 col-sm-6">
                    <div class="tm-home-box-1 effect2">
                        <img src="{{ asset('storage/denah/' . $list->denah) }}" width="346px" height="350px"
                             alt="image">
                        <a href="{{ route('detail', $list->id) }}">
                            <div class="tm-green-gradient-bg tm-city-price-container" style="padding: 2%">
                                <div class="d-flex flex-column">
                                    <div class="text-center">
                                        <h5><strong>{{ $list->title }}</strong></h5>
                                    </div>
                                    <div class="text-center">
                                        <p style="text-transform: capitalize">Rp {{ $list->price }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach


        </div>
    </section>
    <div class="container text-center">
        {!! $listsKavling->links() !!}
    </div>

    <!-- white bg -->
    <section class="tm-white-bg section-padding-bottom">

        <div class="flex-column flex">
            <div class="container">
                <div class="section-margin-top">

                    <div class="row">
                        <div class="tm-section-header">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <hr>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h2 class="tm-section-title">Terjual</h2>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($testimoni as $test)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                                <div class="tm-home-box-2">
                                    <img src="{{asset('storage/testimoni/' . $test->photo)}}"
                                         alt="image" class="img-responsive">
                                    <h3>@php echo $test->description @endphp</h3>
                                    <p class="tm-date">{{$test->kecamatan->nama}}</p>
                                    <div class="tm-home-box-2-container">
                                        <p style="text-align: center">{{$test->name}}</p>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
