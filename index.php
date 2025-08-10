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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }
        
        .dashboard-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .header {
            text-align: center;
            padding: 3rem 2rem;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 24px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            margin-bottom: 3rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .header h1 {
            font-size: 3.5rem;
            font-weight: 900;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 1rem;
        }
        
        .header p {
            color: #6b7280;
            font-size: 1.2rem;
            font-weight: 500;
        }
        
        .link-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 2.5rem;
            padding: 0 1rem;
        }
        
        .link-card {
            position: relative;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            overflow: hidden;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            height: 220px;
        }
        
        .link-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.6s;
        }
        
        .link-card:hover::before {
            left: 100%;
        }
        
        .link-card:hover {
            transform: translateY(-15px) scale(1.03);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            background: rgba(255, 255, 255, 1);
        }
        
        .link-card a {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 2rem;
            text-decoration: none;
            color: inherit;
            transition: all 0.3s ease;
        }
        
        .link-card:hover a {
            color: #667eea;
        }
        
        .card-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: #667eea;
            transition: all 0.3s ease;
        }
        
        .link-card:hover .card-icon {
            transform: scale(1.1);
            color: #764ba2;
        }
        
        .card-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #374151;
            margin-bottom: 1rem;
            text-align: center;
            line-height: 1.3;
        }
        
        .card-credentials {
            background: rgba(102, 126, 234, 0.1);
            padding: 0.8rem 1.2rem;
            border-radius: 12px;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .credential-item {
            font-size: 0.9rem;
            color: #6b7280;
            margin: 0.2rem 0;
            font-weight: 500;
        }
        
        .card-badge {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
            transition: all 0.3s ease;
        }
        
        .link-card:hover .card-badge {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }
        
        @media (max-width: 768px) {
            body {
                padding: 15px;
            }
            
            .header h1 {
                font-size: 2.5rem;
                letter-spacing: 2px;
            }
            
            .header p {
                font-size: 1.1rem;
            }
            
            .link-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
                padding: 0;
            }
            
            .link-card {
                height: 200px;
            }
            
            .card-icon {
                font-size: 2.5rem;
                margin-bottom: 1rem;
            }
            
            .card-title {
                font-size: 1.3rem;
            }
        }
        
        @media (max-width: 480px) {
            .header {
                padding: 2rem 1.5rem;
                margin-bottom: 2rem;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .link-card {
                height: 180px;
            }
            
            .card-icon {
                font-size: 2rem;
            }
            
            .card-title {
                font-size: 1.2rem;
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
                <a href="flex_learning_system/public/" target="_blank">
                    <i class="fas fa-graduation-cap card-icon"></i>
                    <div class="card-title">E-Learning Portal System</div>
                    <div class="card-credentials">
                        <div class="credential-item"><strong>Admin:</strong> admin@gmail.com</div>
                        <div class="credential-item"><strong>Password:</strong> 123</div>
                    </div>
                    <div class="card-badge">Full Stack</div>
                </a>
            </div>
            
            <div class="link-card">
                <a href="vegetable_market/public/" target="_blank">
                    <i class="fas fa-shopping-cart card-icon"></i>
                    <div class="card-title">Vegetable Market</div>
                    <div class="card-badge">E-Commerce</div>
                </a>
            </div>
            
            <div class="link-card">
                <a href="pokemon.php" target="_blank">
                    <i class="fas fa-gamepad card-icon"></i>
                    <div class="card-title">Pokémon API</div>
                    <div class="card-badge">Fetch API</div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>