<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $theme ? $theme->title : 'Home Linnex Mobile &#8211; Linnex' }}</title>

{!! $theme ? $theme->meta : '' !!}

<link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/assets/css/line-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/assets/css/slick.css') }}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset($app ? $app->favicon : 'front/assets/images/favicon.png') }}" type="image/png">

{!! $custom ? $custom->css : '' !!}