<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title', 'My Laravel App')</title>
        @include('admin.layouts.head')
        @yield('css')
    </head>
    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
        <div class="app-wrapper">
            @include('admin.layouts.header')
            @include('admin.layouts.sidebar')

            <main class="app-main">
                <div class="app-content">
                    @yield('content')
                </div>
            </main>

            <footer class="app-footer">
                <div class="float-end d-none d-sm-inline">Anything you want</div>
                <strong>
                    Copyright &copy; {{date('Y')}} &nbsp;
                    <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
                </strong>
                All rights reserved.
            </footer>
        </div>
        @include('admin.layouts.footer')
        @include('admin.layouts.alertMessage')
    	@include('admin.common.delete.modal')
        @yield('js')
    </body>
</html>