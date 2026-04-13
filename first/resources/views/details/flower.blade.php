<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Details</title>
    <style>
        body { font-family: sans-serif; max-width: 600px; margin: 40px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; line-height: 1.6; }
        .back-link { display: inline-block; margin-bottom: 20px; text-decoration: none; color: #0066cc; }
        .info-group { margin-bottom: 10px; }
        span { font-weight: bold; color: #444; width: 120px; display: inline-block; }
    </style>
</head>
<body>
    <a href="{{ route('gallery.index') }}" class="back-link">&larr; Back to Gallery</a>
    
    <h2>Flower Details</h2>
    <img src="https://tse1.mm.bing.net/th/id/OIP.yKZciiQwjFXytlxf_3pmUAHaFj?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Flower" style="width: 100%; border-radius: 8px; margin-bottom: 20px;">
    
    <div class="info-group"><span>Name:</span> Rose</div>
    <div class="info-group"><span>Species:</span> Rosa rubiginosa</div>
    <div class="info-group"><span>Color:</span> Pink / Red</div>
    <div class="info-group"><span>Habitat:</span> Gardens, Wild</div>
    <div class="info-group"><span>Meaning:</span> Love and Romance</div>
</body>
</html>