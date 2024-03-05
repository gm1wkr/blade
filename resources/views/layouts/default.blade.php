<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
        @include('includes.scripts')
    </head>
    <body>

        @include('includes.header')
        @include('includes.breadcrumbs')

        <main class="container-fluid">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 h-100 panel-wrapper">
                    <div class="panelx h-100">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>

        @include('includes.footer')

    </body>
</html>