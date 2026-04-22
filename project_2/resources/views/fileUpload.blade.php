<h2>Upload File</h2>

<form action="/upload-file" method="POST" enctype="multipart/form-data">

    @csrf

    Select File: <input type="file" name="file">
    <br><br>

    <button type="submit">Upload</button>

</form>