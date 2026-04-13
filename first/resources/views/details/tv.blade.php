<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV Details</title>
    <style>
        body { font-family: sans-serif; max-width: 600px; margin: 40px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; line-height: 1.6; }
        .back-link { display: inline-block; margin-bottom: 20px; text-decoration: none; color: #0066cc; }
        .info-group { margin-bottom: 10px; }
        span { font-weight: bold; color: #444; width: 120px; display: inline-block; }
    </style>
</head>
<body>
    <a href="{{ route('gallery.index') }}" class="back-link">&larr; Back to Gallery</a>
    
    <h2>Television Details</h2>
    <img src="https://images.unsplash.com/photo-1593359677879-a4bb92f829d1?w=600&q=80" alt="TV" style="width: 100%; border-radius: 8px; margin-bottom: 20px;">
    
    <div class="info-group"><span>Brand:</span> Samsung</div>
    <div class="info-group"><span>Model:</span> QLED Q80C</div>
    <div class="info-group"><span>Screen Size:</span> 65 Inches</div>
    <div class="info-group"><span>Resolution:</span> 4K UHD</div>
    <div class="info-group"><span>Features:</span> Smart TV, HDR10+, Alexa Built-in</div>
</body>
</html>