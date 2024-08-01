<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posh Steps</title>
    @include('frontend.include.style')
</head>
<body>
    @include('frontend.include.header')
    @yield('content')
    @include('frontend.include.footer')
    @include('frontend.include.script')

</body>
</html>
