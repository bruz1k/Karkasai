<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <Link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <title>Order details</title>
</head>
<h1>Order details</h1>
<body>
<table>
    <th>Id</th>
    <Th>Quantity</Th>
    <th>Orders_id</th>
    <tr>
 @foreach($ordersdetails as $orderdetail)
     <td>{{$orderdetail -> id}};</td>
       <td> {{$orderdetail -> quantity}};</td>
        <td>{{$orderdetail -> orders_id}};</td>
        </tr>
 @endforeach
</table>
</body>
</html>
