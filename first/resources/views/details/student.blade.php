<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <style>
        body { font-family: sans-serif; max-width: 600px; margin: 40px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; line-height: 1.6; }
        .back-link { display: inline-block; margin-bottom: 20px; text-decoration: none; color: #0066cc; }
        .info-group { margin-bottom: 10px; }
        span { font-weight: bold; color: #444; width: 120px; display: inline-block; }
    </style>
</head>
<body>
    <a href="{{ route('gallery.index') }}" class="back-link">&larr; Back to Gallery</a>
    
    <h2>Student Details</h2>
    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=600&q=80" alt="Student" style="width: 100%; border-radius: 8px; margin-bottom: 20px;">
    
    <div class="info-group"><span>Name:</span> Raj Gupta</div>
    <div class="info-group"><span>Age:</span> 2100</div>
    <div class="info-group"><span>Major:</span> Computer Science</div>
    <div class="info-group"><span>University:</span> LPU</div>
    <div class="info-group"><span>GPA:</span> 0.9</div>
</body>
</html>