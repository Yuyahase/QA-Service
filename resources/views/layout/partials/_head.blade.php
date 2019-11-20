<!-- page head -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="QA Service">
<link rel="icon" href="">

<title>{{ config('app.name', 'QA Service') }}@yield('title')</title>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/css/styles.css')}}">
@yield('additional-styles')