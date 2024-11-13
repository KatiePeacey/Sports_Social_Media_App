<html>
<head>
    <title>Clubs</title>
</head>
<body>
    @if($player)
    <h1>{{$player}} Clubs</h1>
    <p>The club will be training tonight for {{$player}}.</p>
    @else
    <h1>No player!</h1>
    @endif
</body>
</html>