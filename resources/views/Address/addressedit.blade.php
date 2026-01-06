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

<form action="{{route('addressDataedit',$address->id)}}" method="post">@csrf
    <h1 id="heading">Address</h1>
    <input id="inputbox" type="text" placeholder="enter your address name" name="addressName" value="{{ $address->city }}">
      
    @error('addressName')
    <div class="error">{{ $message }}</div>
@enderror
<br><br>
    <input id="inputbox" type="text" placeholder="enter your street address" name="streetNumber" value="{{$address->street }}">
    
       @error('streetNumber')
    <div class="error">{{ $message }}</div>
@enderror
<br><br>

<button id="buttonbox">submit</button>

</form>
    </div>
</body>
</html>