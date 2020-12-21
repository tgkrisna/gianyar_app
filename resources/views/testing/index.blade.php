<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>
</head>
<body>
    @foreach ($a as $item)
        {{$item->us_name}}
        {{$item->email}}
        {{$item->pwd}}
        halooo
    @endforeach
</body>
</html>
