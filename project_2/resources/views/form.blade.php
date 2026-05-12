<form action="/submit-form" method="get">
    @csrf
    @method('delete')
    Username: <input type="text" name="username">
    <br><br>
    Email: <input type="text" name="email">
    <br><br>
    <button type="submit">Submit</button>
</form>
@error('username')
@if($errors->any())
<ul>
    @foreach($errors->all() as $err)
    <li>{{$err}}</li>
    @endforeach
</ul>
@enderror