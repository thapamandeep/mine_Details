<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Contact Detail</h2>

<tr>
<td>{{ $somecontact->number }}</td>
<td>{{ $somecontact->email }}</td>
</tr>


<a href="{{route('contactTable')}}">

    <button>Back to list</button>
    
</a>
</body>
</html>