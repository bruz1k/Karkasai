<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <Link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <title>Users</title>
</head>
<h1>Users</h1>
<body>
<table>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <tr>
    @foreach($users as $user)
        <td> {{$user -> id }};</td>
        <td>   {{$user -> name}};</td>
            <td>{{$user -> email}};</td>
        </tr>
    @endforeach
</table>
</body>
</html>
