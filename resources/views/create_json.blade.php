<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('create.region')}}" method="POST">
    @csrf
    <button type="submit">create region</button>
</form>
<form action="{{route('create.district')}}" method="POST">
    @csrf
    <button type="submit">create district</button>
</form>
</body>
</html>
