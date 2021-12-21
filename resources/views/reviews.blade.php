<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <Link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <title>Reviews</title>
</head>
<body>
<h1>Reviews</h1>
<table>
    <th>Rating</th>
    <th>Comments</th>
    <th>Products Id</th>
    <th>Users Id</th>
        <tr>
            @foreach($reviews as $review)
           <td> {{$review -> rating}};</td>
             <td> {{$review -> comments}};</td>
              <td> {{$review -> products_id}};</td>
                <td>{{$review -> users_id}};</td>
        </tr>
            @endforeach
</table>
</body>
</html>
