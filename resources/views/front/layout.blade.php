<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.components.head')
</head>
<body>

    <!-- Facebook page init start -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0&appId=150009693812063&autoLogAppEvents=1" nonce="P4Xk3XIj"></script>
    <!-- Facebook page init end -->
    
    @include('front.components.header')

    @yield('content')

    @include('front.components.footer')


    @include('front.components.script')
</body>
</html>