<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <Link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <title>Products</title>
</head>
<body>
<h1>Products</h1>
<table>
    <th>Title</th>
    <th>Price</th>
    <th>Description</th>
    <th>Status</th>
        <tr>
        @foreach($products as $product)
            <td>{{$product -> title}};</td>
             <td>  {{$product -> price}};</td>
               <td> {{$product -> description}};</td>
               <td> {{$product -> status}};</td>
        </tr>
        @endforeach

</body>
</html>
