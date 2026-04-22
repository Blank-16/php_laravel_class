<h2>SImple Form</h2>

<form action="/;submit-form" method="POST">
    @csrf
    Name: <input type="text" name="name" value="{{ old('name') }}">
    <br>
    Email: <input type="email" name="email" value="{{ old('email') }}">
    <br>
    <button type="submit">Submit</button>
</form>