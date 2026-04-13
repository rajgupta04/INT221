<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uploaded Files</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .file-list { list-style-type: none; padding: 0; max-width: 400px; }
        .file-item { 
            margin-bottom: 10px; 
            padding: 10px; 
            border: 1px solid #ccc; 
            border-radius: 5px;
            display: flex; 
            justify-content: space-between; 
            align-items: center;
            background-color: #f9f9f9;
        }
        .download-icon { 
            text-decoration: none; 
            font-size: 1.2em; 
            color: #007bff;
        }
        .download-icon:hover { color: #0056b3; }
        .error { color: red; }
    </style>
</head>
<body>
    <h2>Uploaded Files</h2>

    @if($errors->any())
        <p class="error">{{ $errors->first('file') }}</p>
    @endif

    @if(empty($files))
        <p>No files uploaded yet.</p>
    @else
        <ul class="file-list">
            @foreach($files as $file)
                @php $filename = basename($file); @endphp
                <li class="file-item">
                    <span>{{ $filename }}</span>
                    <a href="{{ url('/download-file/' . urlencode($filename)) }}" class="download-icon" title="Download">
                        💾 Download
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
    
    <br>
    <a href="{{ url('/upload') }}">Upload More Files</a>
</body>
</html>