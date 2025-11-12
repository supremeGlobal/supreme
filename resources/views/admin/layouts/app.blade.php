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
        </div>
        @include('admin.layouts.footer')
        @include('admin.layouts.alertMessage')
    	@include('admin.common.delete.modal')
        @yield('js')
    </body>
</html>