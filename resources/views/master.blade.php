<!DOCTYPE html>
<html lang="zxx">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('assets.styles')

        <title>Patoi - Pet Care Shop</title>

        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    </head>
    <body>
        <!-- Start Header -->
        @include('layouts.header')
        <!-- End Header -->

        @yield('contents')

        <!-- Start Footer -->
        @include('layouts.footer')
        <!-- End Footer -->

        <!-- Start QuickView Modal -->
        @include('modals.quick-view')
        <!-- End QuickView Modal -->

        <!-- Start Sidebar Modal Area -->
        @include('modals.sidebar-modal')
        <!-- End Sidebar Modal Area -->

        @include('assets.scripts')
    </body>
</html>
