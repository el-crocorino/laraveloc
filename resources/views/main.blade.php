<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('lib/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/bootstrap/dist/css/bootstrap-theme.min.css') }}" rel="stylesheet">
        <!--[if lt IE 9]>
                {{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
                {{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
        <![endif]-->
        <title>@yield('title')</title>
    </head>
    <body>
        @yield('content')
    </body>
</html>
