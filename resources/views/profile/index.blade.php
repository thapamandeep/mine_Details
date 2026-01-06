<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
    <table>
      
        <tr>
            <th>SurName</th>
            <th>First Name</th>
            <th>Action</th>
            <th>Edition</th>
           
        </tr>
          @foreach($allabouts as $profile)
        <tr>
            <td>{{$profile->surename}}</td>
            <td>{{$profile->firstname}}</td>
            <td><a href="{{ route('profileDataview', $profile->id) }}"><button>View</button></a></td> 
            <td><a href="{{ route('profileDataedit', $profile->id) }}"><button>Edit</button></a></td>
            
        </tr>
    @endforeach

    </table>
    
   
</body>
</html>