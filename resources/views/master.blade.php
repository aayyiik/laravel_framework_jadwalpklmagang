<!doctype html>
<html lang="en">

@include('templates.partials.head')

<body>

    <div id="wrapper">
 
       <div class="main-panel">
            @include('templates.partials.top_nav')

            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            @include('templates.partials.footer')
        </div>
    

@include('templates.partials.script')
    </div>
</body>
</html>