<!DOCTYPE html>
<html lang="en">
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>{{ $title }}</title>

        {{-- jQuery Scripts --}}
        <script src="{{asset('js/jQuery.min.js')}}"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- bootstrap styles --}}
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

    </head>


    <body>
        <div class="container">
            @include('includes.header')

            @yield('content')
                
            @include('includes.footer')
        </div>

        {{-- bootstrap scripts --}}
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    </body>
</html>
