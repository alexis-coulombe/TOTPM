<?php
    /**
     * Main template for this application.
     * Contains navs, footer, header.
     */
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        <div class="container-scroller">
            @include('partials.navbar')
            <div class="container-fluid page-body-wrapper">
                @include('partials.sidebar')
                <div class="main-panel">
                    <div class="content-wrapper">
                        @include('partials.header')

                        @yield('content')
                        <div class="col-lg-12 grid-margin stretch-card average-price-card">
                            @include('partials.cards.code')
                        </div>
                    </div>
                    @include('partials.footer')
                </div>
            </div>
        </div>

        <script src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>
