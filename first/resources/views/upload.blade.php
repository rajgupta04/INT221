<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
    <h2>Upload a File</h2>
    
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif

    <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="file">Choose file to upload:</label>
        <input type="file" name="file" id="file" required>
        <br><br>
        <button type="submit">Upload File</button>
    </form>
</body>
</html>