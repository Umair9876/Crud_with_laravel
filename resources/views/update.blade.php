<form action="{{route('update')}}"  method="POST">
    {{csrf_field()}}
    <input type="hidden" name="page_id" value="{{$page->id}}">
    First name:<br>
    <input type="text" name="name" value="{{$page->name}}" >
    <br>
    Pass<br>
    <input type="password" name="passw" value="{{$page->password}}">
    <br><br>
    <input type="submit" value="Submit">
</form>

