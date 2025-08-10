<?php
// No PHP logic needed for this simple index page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #f3e7e9, #e3f2fd);
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .dashboard-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 2rem 1rem;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }
        .header h1 {
            font-size: 2.5rem;
            font-weight: 800;
            color: #2c3e50;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }
        .link-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1.5rem;
            padding: 0 1rem;
        }
        .link-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: all 0.3s ease;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .link-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            background: #ffffff;
        }
        .link-card a {
            display: block;
            color: #3498db;
            font-size: 1.3rem;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .link-card a:hover {
            color: #2980b9;
            text-decoration: underline;
        }
        @media (max-width: 640px) {
            .header h1 {
                font-size: 2rem;
            }
            .link-grid {
                grid-template-columns: 1fr;
            }
            .link-card {
                height: 120px;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="dashboard-container">
        <div class="header">
            <h1>Project Dashboard</h1>
        </div>
        <div class="link-grid">
            <div class="link-card">
                <a href="flex_learning/public" target="_blank">E-Learning Portal System</a>
            </div>
            <div class="link-card">
                <a href="vegetable_market/public" target="_blank">Vegetable Market</a>
            </div>
            <div class="link-card">
                <a href="pokemon.php" target="_blank">Pokémon</a>
            </div>
            <!-- <div class="link-card">
                <a href="weather.php" target="_blank">Weather</a>
            </div>
            <div class="link-card">
                <a href="online_chat.php" target="_blank">Online Chat</a>
            </div>
            <div class="link-card">
                <a href="blob.php" target="_blank">Blob</a>
            </div>            
            <div class="link-card">
                <a href="gallery.php" target="_blank">Photo Gallery</a>
            </div>
            <div class="link-card">
                <a href="snake.php" target="_blank">Snake Game</a>
            </div> -->
        </div>
    </div>
</body>
</html>