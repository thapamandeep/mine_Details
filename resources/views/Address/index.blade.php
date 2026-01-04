<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
          <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}



tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<table>
    <tr>
        <th>City</th>
        <th>Street</th>
        <th>Action</th>
    </tr>
@foreach($alladdresses as $address)
    <tr>
        <td>{{ $address->city }}</td>
        <td>{{ $address->street }}</td>

       <td><a href="{{ route('addressDataview', $address->id)}}"><button >View</button></a></td>
       
    </tr>
    @endforeach
</table>
</body>
</html>