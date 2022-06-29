@extends('layouts.checkout')

@section('title', 'Checkout Travels')

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
                            <li class="breadcrumb-item ">
                                Details
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Who is Going</h1>
                        <p>Trip to Ubud, Bali, Indonesia</p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Pictures</td>
                                        <td>Name</td>
                                        <td>Nationality</td>
                                        <td>VIsa</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ url('frontend/images/members-(10).png') }}" height="60">
                                        </td>
                                        <td class="align-middle">
                                            Ricardo
                                        </td>
                                        <td class="align-middle">
                                            CN
                                        </td>
                                        <td class="align-middle">
                                            N/A
                                        </td>
                                        <td class="align-middle">
                                            Active
                                        </td>
                                        <td class="align-middle">
                                            <a href="#">
                                                X
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('frontend/images/testimoni-1.png') }}" height="60">
                                        </td>
                                        <td class="align-middle">
                                            Shabrina
                                        </td>
                                        <td class="align-middle">
                                            SG
                                        </td>
                                        <td class="align-middle">
                                            30 Days
                                        </td>
                                        <td class="align-middle">
                                            Active
                                        </td>
                                        <td class="align-middle">
                                            <a href="#">
                                                X
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form action="" class="form-inline">
                                <label for="inputUsername" class="sr-only">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Username">

                                <label for="inputVisa" class="sr-only">Visa</label>
                                <select class="custom-select mb-2 mr-sm-2" name="inputVisa" id="inputVisa">
                                    <option value="VISA" selected>Visa</option>
                                    <option value="30Days">30 Days</option>
                                    <option value="n/a">N/A</option>
                                </select>

                                <label for="doePassport" class="sr-only">DOE Passport</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport">
                                </div>

                                <button type="submit" class="btn btn-add-now mb-2 px-4">
                                    Add Now
                                </button>
                            </form>
                            <h3 class="mt-2 mb-0">Note</h3>
                            <p class="disclaimer mb-0">
                                You are only able to invite member that has registered in Travels. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Informations</h2>
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
                        <a href="{{ route('detail') }}" class="text-muted">Cancel Booking</a>
                    </div>
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
        $(document).ready(function(){
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/Ic-calender.png') }}"/>'
                }
            })
        });
    </script>
@endpush
    