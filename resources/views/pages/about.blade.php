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
                                    Tentang Kami
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>{{ $about->title }}</h1>

                            <br>
                            @php echo $about->description; @endphp
                        </div>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Informasi kami</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Members</th>
                                    <td widht="50%" class="text-right">2 Person</td>
                                </tr>
                                <tr>
                                    <th width="50%">Additional Visa</th>
                                    <td widht="50%" class="text-right">$ 190,00</td>
                                </tr>
                                <tr>
                                    <th width="50%">Trip Price</th>
                                    <td widht="50%" class="text-right">$ 95,00 / Person</td>
                                </tr>
                                <tr>
                                    <th width="50%">Sub Total</th>
                                    <td widht="50%" class="text-right">$ 380,00</td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (+Unique)</th>
                                    <td widht="50%" class="text-right text-total">
                                        <span class="text-blue">$ 379,</span>
                                        <span class="text-orange">33</span>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <h2>Payment Instructions</h2>
                            <p class="payment-instructions">
                                Please complete payment before to countinue the wonderful trip
                            </p>
                            <div class="bank">
                                <div class="bank-item pb-3">
                                    <img src="{{ url('frontend/images/Ic-bank.png') }}" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>PT Travels ID</h3>
                                        <p>
                                            0893 34734 348
                                            <br>
                                            Bank Central Asia
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="bank-item pb-3">
                                    <img src="{{ url('frontend/images/Ic-bank.png') }}" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>PT Travels ID</h3>
                                        <p>
                                            1242 122 1394
                                            <br>
                                            Bank HSBC
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                I Have Made Payment
                            </a>
                        </div>
                        <div class="text-center mt-2">
                            <a href="" class="text-muted">Cancel Booking</a>
                        </div>
                    </div> --}}
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
        $(document).ready(function() {
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/Ic-calender.png') }}"/>'
                }
            })
        });
    </script>
@endpush
