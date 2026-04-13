<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin: 40px; }
        .gallery { 
            display: flex; 
            justify-content: center; 
            gap: 20px; 
            flex-wrap: wrap; 
        }
        .gallery-item {
            text-decoration: none;
            color: #333;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 8px;
            transition: transform 0.2s;
        }
        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .gallery-item img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Click an Image to View Details</h1>

    <div class="gallery">
        <a href="{{ route('gallery.flower') }}" class="gallery-item">
            <img src="https://tse1.mm.bing.net/th/id/OIP.yKZciiQwjFXytlxf_3pmUAHaFj?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Flower">
            <h3>Flower</h3>
        </a>

        <a href="{{ route('gallery.dog') }}" class="gallery-item">
            <img src="https://images.unsplash.com/photo-1543466835-00a7907e9de1?w=400&q=80" alt="Dog">
            <h3>Dog</h3>
        </a>

        <a href="{{ route('gallery.student') }}" class="gallery-item">
            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=400&q=80" alt="Student">
            <h3>Student</h3>
        </a>

        <a href="{{ route('gallery.teacher') }}" class="gallery-item">
            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?w=400&q=80" alt="Teacher">
            <h3>Teacher</h3>
        </a>

        <a href="{{ route('gallery.tv') }}" class="gallery-item">
            <img src="https://images.unsplash.com/photo-1593359677879-a4bb92f829d1?w=400&q=80" alt="TV">
            <h3>TV</h3>
        </a>
    </div>
</body>
</html>