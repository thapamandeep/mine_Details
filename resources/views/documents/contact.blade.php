<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

@if(Session::has('success_message'))
    <div class="successMessage" >
        {{session('success_message')}}
    </div>
@endif


@if(Session::has('error_message'))
    <div class="errorMessage">
        {{session('error_message')}}
    </div>
@endif

<div id="prodesigned">


        <form action="{{ route('contactStore') }}" method="post">@csrf
    <h1 id="heading">Contact</h1>
    <input id="inputbox" type="text" placeholder="enter your phone number" name="yourNumber">
     
    @error('yourNumber')
    <div class="error">{{ $message }}</div>
@enderror

<br><br>
    <input id="inputbox" type="text" placeholder="enter your email address" name="yourEmail">
     
    @error('yourEmail')
    <div class="error">{{ $message }}</div>
@enderror

<br><br>

<button id="buttonbox">Submit</button>
   
</form>
   
</div>

</body>
</html>