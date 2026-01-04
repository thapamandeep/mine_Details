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
            <th>your Emaile</th>
            <th>your Number</th>
            <th>Action</th>
    </tr>
  
    @foreach($somecontacts as $contact)
    
    <tr>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->number }}</td>
        <td><a href="{{ route('contactDataview',$contact->id) }}"><button>View</button></a></td>
    </tr>
    @endforeach
    </table>
</body>
</html>