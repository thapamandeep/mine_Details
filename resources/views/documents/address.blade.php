<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="prodesigned">
<form action="{{route('addressStore')}}" method="post">@csrf
    <h1 id="heading">Address</h1>
    <input id="inputbox" type="text" placeholder="enter your address name" name="addressName">
      
    @error('addressName')
    <div class="error">{{ $message }}</div>
@enderror
<br><br>
    <input id="inputbox" type="text" placeholder="enter your street address" name="streetNumber">
    
       @error('streetNumber')
    <div class="error">{{ $message }}</div>
@enderror
<br><br>

<button id="buttonbox">submit</button>

</form>
    </div>
</body>
</html>