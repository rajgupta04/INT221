<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Demonstration</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        ul { line-height: 2; font-size: 1.2rem; }
    </style>
</head>
<body>
    <h1>Demonstrating Laravel Link References</h1>
    <ul>
        {{-- 1. Plain href / Relative HTML path --}}
        <li>
            <strong>1. Plain HTML href:</strong>
            <a href="/students/dummy">Go to Dummy Students</a>
            <br>
            <small>Hardcoded relative path directly into the href attribute.</small>
        </li>

        {{-- 2. Basic url() Helper --}}
        <li>
            <strong>2. Using url() Helper:</strong>
            <a href="{{ url('/api/v2/students') }}">Go to API v2</a>
            <br>
            <small>Generates the absolute URL based on your app's root URL (e.g. {{ url('/api/v2/students') }}).</small>
        </li>

        {{-- 3. Using action() Helper --}}
        <li>
            <strong>3. Using action() Helper:</strong>
            <a href="{{ action([\App\Http\Controllers\StudentController::class, 'showUrls']) }}">Go to demo Urls page</a>
            <br>
            <small>Generates a URL directly pointing to a specific controller action/method (e.g. {{ action([\App\Http\Controllers\StudentController::class, 'showUrls']) }}).</small>
        </li>

        {{-- 4. Using route() Helper (Named Routes) --}}
        <li>
            <strong>4. Using route() Helper:</strong>
            <a href="{{ route('api.v1.students') }}">Go to API v1</a>
            <br>
            <small>Generates a URL using a named route defined in routes/web.php with ->name('api.v1.students'). (e.g. {{ route('api.v1.students') }}).</small>
        </li>
    </ul>
</body>
</html>