<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body>


    <header class="header">
        @include('includes.header')
    </header>

    <main>
        <!-- contenue dynamique -->
        @yield('main')
        @yield('content')
    </main>
    

    <footer class="row">
        @include('includes.footer')
    </footer>
</body>
</html>