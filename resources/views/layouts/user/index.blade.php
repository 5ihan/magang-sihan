<!DOCTYPE html>
<html lang="en">
<head>

     <title>PHPJabber | Car Dealer Website Template</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     @include('layouts.user.css')
</head>

<body id="top">



    @include('layouts.user.navbar')

     @yield('content')

     @include('layouts.user.footer')

     @include('layouts.user.js')






    </body>

    </html>
