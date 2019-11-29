<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>The method Attribute</h2>
<p>This form will be submitted using the GET method:</p>

<form action="{{url('/index')}}"  method="POST">
    {{csrf_field()}}


    First name:<br>
    <input type="text" name="name" >
    <br>
    Pass<br>
    <input type="password" name="passw" >
    <br><br>
    <input type="submit" value="Submit" >
    <a href="/read" class="btn btn-primary">Read</a>
</form>
</body>
</html>