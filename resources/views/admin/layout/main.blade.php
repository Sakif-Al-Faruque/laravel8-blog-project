@include('editor.layout.header')


<div class="dashboard-container">
    <div class="side-bar-portion">@include('editor.layout.sidebar')</div>
    <div class="main-bar-portion">
        @yield('editor-main-bar')
    </div>
</div>
@include('editor.layout.footer')