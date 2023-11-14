<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body>
    <div class="container-fluid p-0">
        <div>
            @include('includes.header')
        </div>
        <div>
            @yield('content')
        </div>
        <div>
            @include('includes.footer')
        </div>
    </div>
</body>

</html>