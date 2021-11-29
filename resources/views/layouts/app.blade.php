<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{ config('app.name') }}</title>

    @include('layouts._css')
</head>

<body>

    <div class="main-wrapper">

        @include('layouts._navbar')

        @include('layouts._sidebar')

        <div class="page-wrapper">
            <div class="content container-fluid">
                @yield('content')
            </div>
        </div>

    </div>

    @include('layouts._js')
</body>

</html>
