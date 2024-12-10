<!doctype html>
<html lang="en">
    <head>
        @vite('resources/css/app.css')
    </head>

<body>
    @if ($errors->any())
        <div>
            Errors:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('message'))
            <p><b>{{ session('message') }}</b></p>
    @endif

    <div class="content">
        @yield('content')
    </div>
    
</body>
</html>
