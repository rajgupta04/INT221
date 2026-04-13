<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Details</title>
    <style>
        body { font-family: sans-serif; max-width: 600px; margin: 40px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; line-height: 1.6; }
        .back-link { display: inline-block; margin-bottom: 20px; text-decoration: none; color: #0066cc; }
        .info-group { margin-bottom: 10px; }
        span { font-weight: bold; color: #444; width: 120px; display: inline-block; }
    </style>
</head>
<body>
    <a href="{{ route('gallery.index') }}" class="back-link">&larr; Back to Gallery</a>
    
    <h2>Teacher Details</h2>
    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?w=600&q=80" alt="Teacher" style="width: 100%; border-radius: 8px; margin-bottom: 20px;">
    
    <div class="info-group"><span>Name:</span> Praveen kaur</div>
    <div class="info-group"><span>Subject:</span>Web development</div>
    <div class="info-group"><span>Experience:</span> 15 Years</div>
    <div class="info-group"><span>Department:</span> Computer Sciences</div>
    <div class="info-group"><span>Office:</span> Room:27-207 </div>
</body>
</html>