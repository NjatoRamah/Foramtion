@extends('admin.layout.master');
@section('title')
    Dashboard<i class="fa fa-dashboard" aria-hidden="true"></i>
@endsection
@section('contente')
    
<div class="dash-content">
    <div class="overview">
        <div class="title">
             <i class="fas fa-dashboard"></i>
             <span class="text">DASBOARD</span>
        </div>
        <div class="boxes">
            <div class="box box1">
                <i class="fa fa-user"></i>
                <span class="text">Client</span>
                <span class="number">
                        {{ $nbClt }}
                </span>
            </div>
            <div class="box box2">
                <i class="fas fa-comments"></i>
                <span class="text">Commentaires</span>
                <span class="number">
                    {{ $nbComm }}
                </span>
            </div>
            <div class="box box3">
                <i class="fas fa-share"></i>
                <span class="text">Total Reservation</span>
                <span class="number">
                    {{ $nbreser }}
                </span>
            </div>
            <div class="box box4 mt-4">
                <i class="fa fa-phone"></i>
                <span class="text">Contact</span>
                <span class="number">
                    {{ $nbcont }}
                </span>
            </div>
            <div class="box box5 mt-4">
                <i class="fa fa-users"></i>
                <span class="text">Personnel</span>
                <span class="number">
                    {{ $nbpers }}
                </span>
            </div>
            <div class="box box6 mt-4">
                <i class="fa fa-area-chart" aria-hidden="true"></i>
                <span class="text">Article</span>
                <span class="number">
                    {{ $nbart }}
                </span>
            </div>
        </div>
    </div>
    <div class="activity">
        <div class="title">
            <i class="fas fa-clock"></i>
            <span class="text">RECENT ACTIVITER</span>
        </div>
       
        <div class="row">
            @include('admin.page.payment.chart')
        </div>
        <div class="row">

            <div class="col-md-8 col-xl-8 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Statistique de payment salaire pour les personnels</h6>
                    </div>
                    @include('admin.page.personnel.chart')
                    
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-12 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                
                    @include('admin.page.client.chart')
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('admin/js/chart.js/Chart.bundle.js') }}"></script>
<script src="{{ asset('admin/js/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('admin/js/chart.js/Chart.js') }}"></script>
<script src="{{ asset('admin/js/chart.js/Chart.min.js') }}"></script>

@endsection