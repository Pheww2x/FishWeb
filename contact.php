<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - FishOn</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: linear-gradient(135deg, #1e40af 0%, #0891b2 50%, #06b6d4 100%); min-height: 100vh; padding: 40px 20px; display: flex; align-items: center; justify-content: center; }
        .container { max-width: 600px; width: 100%; background: white; border-radius: 24px; padding: 60px; box-shadow: 0 25px 70px rgba(0, 0, 0, 0.2); }
        h1 { color: #1e40af; font-size: 42px; margin-bottom: 10px; text-align: center; }
        p { color: #475569; line-height: 1.8; margin-bottom: 30px; text-align: center; }
        .contact-info { background: #f1f5f9; padding: 30px; border-radius: 16px; margin-bottom: 30px; }
        .contact-item { display: flex; align-items: center; gap: 15px; margin-bottom: 20px; }
        .contact-item:last-child { margin-bottom: 0; }
        .icon { font-size: 24px; }
        .contact-item a { color: #1e40af; text-decoration: none; font-weight: 600; }
        .back-btn { display: block; text-align: center; background: linear-gradient(135deg, #1e40af 0%, #0891b2 100%); color: white; padding: 12px 30px; border-radius: 25px; font-weight: 600; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <p>Have questions or need support? We're here to help!</p>
        
        <div class="contact-info">
            <div class="contact-item">
                <span class="icon">📧</span>
                <div>
                    <strong>Email:</strong><br>
                    <a href="mailto:fishon.app@gmail.com">fishon.app@gmail.com</a>
                </div>
            </div>
        </div>
        
        <a href="index.php" class="back-btn">← Back to Home</a>
    </div>
</body>
</html>
