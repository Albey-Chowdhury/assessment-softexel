<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Posh Steps</title>
    @include('backend.include.style')
</head>
<body>

    @include('backend.include.nav')
    @include('backend.include.header')
    @yield('content')
    @include('backend.include.script')

</body>
</html>
