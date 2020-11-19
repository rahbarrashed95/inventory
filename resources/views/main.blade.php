@include('layouts.css')
@include('layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('layouts.header')
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
@include('layouts.footer')
