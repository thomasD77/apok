<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Apok</title>

    <!-- Fonts -->
    <link href="http://fonts.cdnfonts.com/css/sofia-pro" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="icon"
          type="image/png"
          href="{{ asset('images/apok_logo.png') }}" />
</head>
<body class="body">

@php
    App::setLocale($lang);
@endphp

<div class="container">
    <header>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/apok_logo.png') }}" alt="logo">
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-6 header__intro">
                <h1>{{__('Bedankt!')}}</h1>
                <h2>{{__('We hebben uw informatie goed ontvangen. We laten u zo spoedig mogelijk iets weten!')}}</h2>
            </div>
        </div>
    </header>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
