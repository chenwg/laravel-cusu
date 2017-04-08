@if (!Request::header('X-PJAX'))
@include('home.public.header')
@endif

@yield('article')

@if (!Request::header('X-PJAX'))
@include('home.public.footer')
@endif
