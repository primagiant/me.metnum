@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Metode Titik Tetap</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Metode Titik Tetap</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-center table-hover datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">Iterasi</th>
                                    <th class="text-center">X<small>r</small></th>
                                    <th class="text-center">| X<small>r+10</small> - X<small>r</small> |</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                    $eps = 0.000001;
                                    $x = 4;
                                    $x_prev = 0;
                                    function g($x)
                                    {
                                        return 5 - log($x);
                                    }
                                @endphp
                                @while (abs($x - $x_prev) >= $eps)
                                    @php $x_prev = $x; @endphp
                                    @php $x = g($x); @endphp
                                    <tr>
                                        <td class="text-center">{{ $i++ }}</td>
                                        <td class="text-center">{{ number_format($x_prev, 6) }}</td>
                                        <td class="text-center">{{ number_format($x_prev - $x, 6) }}</td>
                                    </tr>
                                @endwhile
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
