<form action="/submit-form" method="post" enctype="multipart/form-data">
    @csrf

    Student Name: <input type="text" name="StudentName" value="{{ old('StudentName') }}">
    <br> <br>
    Email: <input type="text" name="email" value="{{ old('email') }}">
    <br> <br>
    Mobile Number: <input type="text" name="mobile" value="{{ old('mobile') }}">
    <br> <br>
    Alternate Mobile: <input type="text" name="alt_mobile" value="{{ old('alt_mobile') }}">
    <br> <br>
    Gender:
    <input type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}> Male
    <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}> Female
    <br> <br>
    Date of Birth: <input type="date" name="dob" value="{{ old('dob') }}">
    <br> <br>
    Age: <input type="number" name="age" value="{{ old('age') }}">
    <br> <br>
    Address: <textarea name="address">{{ old('address') }}</textarea>
    <br> <br>
    Pincode: <input type="text" name="pincode" value="{{ old('pincode') }}">
    <br> <br>
    Course: <input type="text" name="course" value="{{ old('course') }}">
    <br> <br>
    Percentage/Marks: <input type="text" name="percentage" value="{{ old('percentage') }}">
    <br> <br>
    Signature upload: <input type="file" name="signature">
    <br> <br>
    Password: <input type="password" name="password">
    <br> <br>
    Confirm Password: <input type="password" name="confirm_password">
    <br> <br>
    Terms and Conditions: <input type="checkbox" name="terms" {{ old('terms') ? 'checked' : '' }}>
    <br> <br>
    <button type="submit">Submit</button>
</form>

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif