@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Kavling
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kavling }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-hotel fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Terjual
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $testimoni }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pesan masuk
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $contact_us }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-spinner fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="text-xs-left font-weight-bold text-primary text-uppercase mt-1 ml-3">List Pesan Masuk
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                            <th class="col-2">Nama</th>
                            <th class="col-2">No Handphone</th>
                            <th class="col-2">Email</th>
                            <th class="col-2">Judul</th>
                            <th class="col-4">Pesan</th>
                            </thead>
                            <tbody>
                            @foreach($list_contactus as $list)
                                <tr>
                                    <td>{{$list->name}}</td>
                                    <td>{{$list->contact}}</td>
                                    <td>{{$list->email}}</td>
                                    <td>{{$list->title}}</td>
                                    <td>{{$list->message}}</td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                        <div class="float-right mr-4">
                            {!! $list_contactus->links() !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
