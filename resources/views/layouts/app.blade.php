<!doctype html>
<html lang="en">
    <head>
        <title>Hockey Management - @yield('title')</title>
</head>
<style>
body {
  font-family: Arial;
  margin: 0;
}

.header {
  padding: 10px;
  text-align: center;
  background: #bdb5d5;
  color: white;
  font-size: 30px;
}

.content {padding:30px;}
</style>
<body>
    <div class="header">
    <h1>Hockey Management - @yield('title')</h1>
    </div>

    @livewire('user-search')

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