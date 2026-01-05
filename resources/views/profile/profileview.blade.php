<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Address Detail</title>
</head>
<body>

<h2>Profile Detail</h2>

<tr>
<td>{{ $about->surename }}</td>
<td>{{ $about->firstname }}</td>
</tr>


<a href="{{route('profileTable')}}">

    <button>Back to list</button>
    
</a>

</body>
</html>