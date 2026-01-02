<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <a href="{{ route('profileView') }}"> <button>Profile</button></a>
    <a href="{{ route('contactView') }}"><button>Contact</button></a>
    <a href="{{route('addressView')}}"><button>Address</button></a>
    <a href="{{route('profileTable')}}"><button>Profile Table View</button></a>
    <a href="{{route('contactTable')}}"><button>Contact Table View</button></a>
</body>
</html>