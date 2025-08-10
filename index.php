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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            padding: 3rem 2rem;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            margin-bottom: 3rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .header h1 {
            font-size: 3rem;
            font-weight: 900;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 1rem;
        }
        .header p {
            color: #6b7280;
            font-size: 1.1rem;
            margin: 0;
        }
        .link-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            padding: 0 1rem;
        }
        .link-card {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .link-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.5s;
        }
        .link-card:hover::before {
            left: 100%;
        }
        .link-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            background: rgba(255, 255, 255, 1);
        }
        .link-card i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #667eea;
            transition: all 0.3s ease;
        }
        .link-card:hover i {
            transform: scale(1.1);
            color: #764ba2;
        }
        .link-card a {
            display: block;
            color: #374151;
            font-size: 1.4rem;
            font-weight: 700;
            text-decoration: none;
            transition: color 0.3s ease;
            margin-bottom: 0.5rem;
        }
        .link-card a:hover {
            color: #667eea;
        }
        .credentials {
            font-size: 0.9rem;
            color: #6b7280;
            margin-top: 0.5rem;
            line-height: 1.4;
        }
        .credentials span {
            display: block;
            margin: 0.2rem 0;
        }
        .badge {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-top: 0.5rem;
        }
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.2rem;
            }
            .link-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            .link-card {
                height: 180px;
                padding: 1.5rem;
            }
            .dashboard-container {
                padding: 15px;
                margin: 10px auto;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="header">
            <h1>Project Dashboard</h1>
            <p>Welcome to my collection of web development projects</p>
        </div>
        <div class="link-grid">
            <div class="link-card">
                <i class="fas fa-graduation-cap"></i>
                <a href="flex_learning_system/public/" target="_blank">E-Learning Portal System</a>
                <div class="credentials">
                    <span><strong>Admin:</strong> admin@gmail.com</span>
                    <span><strong>Password:</strong> 123</span>
                </div>
                <div class="badge">Full Stack</div>
            </div>
            <div class="link-card">
                <i class="fas fa-shopping-cart"></i>
                <a href="vegetable_market/public/" target="_blank">Vegetable Market</a>
                <div class="badge">E-Commerce</div>
            </div>
            <div class="link-card">
                <i class="fas fa-gamepad"></i>
                <a href="pokemon.php" target="_blank">Pokémon API</a>
                <div class="badge">Fetch API</div>
            </div>
        </div>
    </div>
</body>
</html>