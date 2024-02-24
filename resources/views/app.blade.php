<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Mary's simple recipe for maple bacon donuts
                                            makes a sticky, sweet treat with just a hint
                                            of salt that you'll keep coming back for.">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        
    
        <title>طلاب</title>
        

        <script src="{{ asset('js/script.js')}}"></script>
        <script src="{{ asset('js/jquery-3.7.1.min.js')}}"></script>
        <script src="{{ asset('js/popper.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.js')}}"></script>
        <script src="{{ asset('js/log.js')}}"></script>
        <script src="{{ asset('js/search.js')}}"></script>
        <script src="{{ asset('js/watch.js')}}"></script>
        <script src="{{ asset('js/index.js')}}"></script>

        {{-- logo --}}
        <link rel="icon" type="icon" href="/icon.ico"> 

        {{-- fontawsom --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        {{-- chart --}}
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="rtl" dir="rtl">
        @inertia
    </body>
</html>
