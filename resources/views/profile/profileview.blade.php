<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Address Detail</title>
</head>
<body>

<h2>Profile Detail</h2>

<tr>
<td>{{ $someprofile->surename }}</td>
<td>{{ $someprofile->firstname }}</td>
</tr>


<a href="{{route('profileTable')}}">

    <button>Back to list</button>
    
</a>

</body>
</html>