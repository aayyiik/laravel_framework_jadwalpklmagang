<!doctype html>
<html lang="en">

@include('templates.partials.head')

<body>
    <div class="wrapper">

        

        <div class="main-panel">

           
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

          
        </div>
    </div>

</body>

@include('templates.partials.script')

</html>