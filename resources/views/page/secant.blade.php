@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Metode Secant</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Metode Secant</li>
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
                                    $x0 = 3.2;
                                    $x1 = 4;
                                    $x = $x0;
                                    $x_prev = 0;
                                    
                                    function f($x)
                                    {
                                        return log($x) + ($x - 5);
                                    }
                                @endphp
                                @while (abs($x - $x_prev) >= $eps)
                                    @php $x_prev = $x1; @endphp
                                    @php $x = $x - (f($x)*($x1-$x0)/(f($x1)-f($x0))); @endphp
                                    @php $x0 = $x1; @endphp
                                    @php $x1 = $x; @endphp
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
