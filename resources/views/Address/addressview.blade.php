<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Address Detail</title>
</head>
<body>

<h2>Address Detail</h2>

<tr>
<td>{{ $someaddress->city }}</td>
<td>{{ $someaddress->street }}</td>
</tr>


<a href="{{route('addressTable')}}">

    <button>Back to list</button>
    
</a>

</body>
</html>