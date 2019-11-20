<!-- main page -->
<!DOCTYPE html>
<html lang="ja">

<head>
    @include('layout.partials._head')
</head>

<body>
    @include('layout.partials._nav')
    <div class="container">
        @yield('content')
    </div>
    @include('layout.partials._footer')
</body>
<script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('js/bootstrap.js')}}"></script>
@yield('additional-scripts')

</html>