@extends('master')
@section('content')

<div class="container">
    <header>
        <div class="row">
            <div class="col-md-6 ps-0">
                <img src="{{ asset('images/apok_logo.png') }}" alt="logo">
            </div>
            <div class="col-md-6">
                <h2 class="languages"><a class="languages" href="{{ route('home', 'nl') }}">NL</a><span class="mx-3">-</span><span><a href="{{ route('home', 'fr') }}">FR</a></span></h2>
            </div>

            <div class="col-lg-5 header__intro">
                <h1>{{__('Goeiedag,')}}</h1>
                <h2>
                    {{__('Graag jouw informatie over APOK;')}}
                    {{__('Vul enkele vragen in en win mogelijk een exta prijs!')}}
                </h2>
            </div>
            <div class="col-lg-7 pe-0">
                @if(app()->getLocale() == 'nl')
                    <img class="img-fluid header__img d-none d-lg-block" src="{{ asset('images/swirl_man.png') }}" alt="swirl_man">
                @else
                    <img class="img-fluid header__img d-none d-lg-block" src="{{ asset('images/image_homme_swirl.png') }}" alt="swirl_man">
                @endif
            </div>
        </div>
    </header>

    <main class="row">
        @include('includes.subscribe')
    </main>
</div>

@endsection
