<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    @extends('base.base')
    @section('content')
       <h1>My Homepage</h1>
       <p>{{$product_category}}</p>
       <p>{{$product_name}}</p>
       {!! $button !!}
    @endsection
</body>
</html>