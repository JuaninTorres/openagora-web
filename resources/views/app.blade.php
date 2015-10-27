<!DOCTYPE html>
<html lang="es">
@include('partials.layout.headerpage')
<body>
@include('partials.layout.header')

<div class="container">
    {{-- Main content --}}
    <section class="content">
        @include('partials.errors')
        @if( ! isCurrentRoute('home_path'))
            @yield('page_title')
            @yield('page_subtitle')
            @yield('page_description')
        @endif
        @yield('content')
        <section class="row interior section-blue">
            <div class="col-md-8 col-md-offset-2">
                @include('partials.contact')
            </div>
        </section>
    </section>{{-- /.content --}}
</div>
@include('partials.layout.footer')
@include('partials.layout.footerpage')
</body>
</html>