<head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/sketchy/bootstrap.css">
        <!-- <link rel="stylesheet" type="text/css" href="{{ public_path('') }}assets/css/agency.min.css"> -->
        <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/agency.min.css">
        
        @stack('customestyle')
    </head>