@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Dashboard</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 col-sm-6 col-12">
            <a href="{{ route('bagidua') }}" class="card">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="dash-widget-icon bg-2">
                            <i class="fas fa-divide"></i>
                        </span>
                        <div class="dash-count">
                            <div class="dash-title">Metode Bagi Dua</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
            <a href="{{ route('regulafalsi') }}" class="card">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="dash-widget-icon bg-1">
                            <i class="fas fa-book"></i>
                        </span>
                        <div class="dash-count">
                            <div class="dash-title">Metode Regula Falsi</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
            <a href="{{ route('titiktetap') }}" class="card">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="dash-widget-icon bg-3">
                            <i class="fas fa-map-marked"></i>
                        </span>
                        <div class="dash-count">
                            <div class="dash-title">Metode Titik Tetap</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
            <a href="{{ route('newtonraphson') }}" class="card">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="dash-widget-icon bg-4">
                            <i class="fas fa-apple-alt"></i>
                        </span>
                        <div class="dash-count">
                            <div class="dash-title">Metode Newton Raphson</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
            <a href="{{ route('secant') }}" class="card">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <span class="dash-widget-icon bg-2">
                            <i class="fas fa-user"></i>
                        </span>
                        <div class="dash-count">
                            <div class="dash-title">Metode Secant</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
