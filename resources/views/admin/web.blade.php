<!DOCTYPE html>
<html lang="ar">
<head>
    @include('header')
    @yield('header')
</head>
<body>
<!-- navbar -->
@include('nav')
@yield('nav')

@yield('content')



@include('footer')
@yield('footer')
</body>
</html>
