@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Metode Regula Falsi</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Metode Regula Falsi</li>
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
                                    <th class="text-center">a</th>
                                    <th class="text-center">c</th>
                                    <th class="text-center">b</th>
                                    <th class="text-center">f(a)</th>
                                    <th class="text-center">f(c)</th>
                                    <th class="text-center">f(b)</th>
                                    <th class="text-center">Selang Baru</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                    $eps = 0.000001;
                                    $b = 4;
                                    $a = 3.2;
                                @endphp
                                @while (!($a - $b) < $eps)
                                    @php
                                        $fa = log($a) + ($a - 5);
                                        $fb = log($b) + ($b - 5);
                                        $c = $b - ($fb * ($b - $a)) / ($fb - $fa);
                                        $fc = log($c) + ($c - 5);
                                        
                                        if (abs($fc) < $eps) {
                                            $a = $c;
                                            $b = $c;
                                        } else {
                                            if ($fa * $fc < 0) {
                                                $b = $c;
                                            } else {
                                                $a = $c;
                                            }
                                        }
                                    @endphp
                                    <tr>
                                        <td class="text-center">{{ $i++ }}</td>
                                        <td class="text-center">{{ number_format($a, 6) }}</td>
                                        <td class="text-center">{{ number_format($c, 6) }}</td>
                                        <td class="text-center">{{ number_format($b, 6) }}</td>
                                        <td class="text-center">{{ number_format($fa, 6) }}</td>
                                        <td class="text-center">{{ number_format($fc, 6) }}</td>
                                        <td class="text-center">{{ number_format($fb, 6) }}</td>
                                        @if ($fa * $fc < 0)
                                            <td class="text-center">[a, c]</td>
                                        @else
                                            <td class="text-center">[c, b]</td>
                                        @endif
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
