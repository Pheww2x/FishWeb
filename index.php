<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FishOn - Fisherman Finder App</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            background: linear-gradient(135deg, #1e40af 0%, #0891b2 50%, #06b6d4 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            background: white;
            border-radius: 32px;
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #1e40af 0%, #0891b2 100%);
            padding: 80px 40px 90px;
            text-align: center;
            color: white;
            position: relative;
        }

        .logo {
            width: 150px;
            height: 150px;
            background: white;
            border-radius: 40px;
            margin: 0 auto 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 10px;
        }

        h1 {
            font-size: 56px;
            margin-bottom: 15px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .tagline {
            font-size: 22px;
            opacity: 0.95;
            font-weight: 400;
            letter-spacing: 0.3px;
        }

        .content {
            padding: 60px 50px;
            margin-top: -30px;
            position: relative;
        }

        .description {
            text-align: center;
            color: #334155;
            font-size: 19px;
            line-height: 1.8;
            margin-bottom: 55px;
            max-width: 750px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 400;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .feature {
            padding: 40px 30px;
            background: white;
            border-radius: 20px;
            text-align: center;
            border: 2px solid #e0f2fe;
            box-shadow: 0 4px 15px rgba(30, 64, 175, 0.08);
        }

        .feature-icon {
            font-size: 60px;
            margin-bottom: 20px;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        }

        .feature h3 {
            color: #1e40af;
            margin-bottom: 12px;
            font-size: 22px;
            font-weight: 700;
        }

        .feature p {
            color: #475569;
            font-size: 16px;
            line-height: 1.7;
        }

        .download-section {
            text-align: center;
            padding: 55px 50px;
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
            border-radius: 24px;
            margin-bottom: 45px;
            border: 2px solid #93c5fd;
        }

        .download-btn {
            display: inline-block;
            background: linear-gradient(135deg, #1e40af 0%, #0891b2 100%);
            color: white;
            padding: 20px 55px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 19px;
            font-weight: 700;
            box-shadow: 0 10px 30px rgba(30, 64, 175, 0.4);
            letter-spacing: 0.3px;
        }

        .download-icon {
            margin-right: 10px;
            font-size: 24px;
            vertical-align: middle;
        }



        .footer {
            text-align: center;
            padding: 40px;
            color: #64748b;
            font-size: 14px;
            background: linear-gradient(to bottom, white 0%, #f8fafc 100%);
            border-top: 1px solid #e2e8f0;
        }

        @media (max-width: 768px) {
            .header {
                padding: 50px 25px;
            }

            .logo {
                width: 110px;
                height: 110px;
            }

            h1 {
                font-size: 36px;
            }

            .tagline {
                font-size: 18px;
            }

            .content {
                padding: 40px 25px;
            }

            .features {
                grid-template-columns: 1fr;
            }

            .download-btn {
                padding: 16px 40px;
                font-size: 17px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="logo.png" alt="FishOn Logo"> 
            </div>
            <h1>FishOn</h1>
            <p class="tagline">Find Fishermen Near You</p>
        </div>

        <div class="content">
            <div class="description">
                <p>Connect with fellow fishing enthusiasts in your area. FishOn helps you discover local fishermen, share fishing spots, and build a community of passionate anglers.</p>
            </div>

            <div class="features">
                <div class="feature">
                    <div class="feature-icon">📍</div>
                    <h3>Find Fishermen</h3>
                    <p>Locate nearby fishermen and connect with the fishing community in your area.</p>
                </div>
                <div class="feature">
                    <div class="feature-icon">🎣</div>
                    <h3>Share Spots</h3>
                    <p>Discover and share the best fishing locations with other enthusiasts.</p>
                </div>
                <div class="feature">
                    <div class="feature-icon">👥</div>
                    <h3>Build Community</h3>
                    <p>Connect, chat, and plan fishing trips with anglers who share your passion.</p>
                </div>
            </div>

            <div class="download-section">
                <h2 style="color: #1e40af; margin-bottom: 20px; font-size: 32px; font-weight: 700;">Ready to Get Started?</h2>
                <p style="color: #475569; margin-bottom: 35px; font-size: 17px;">Download FishOn now and join the fishing community!</p>
                <?php
                // Replace this with your actual app download link
                $downloadLink = "YOUR_DOWNLOAD_LINK_HERE";
                ?>
                <a href="<?php echo htmlspecialchars($downloadLink); ?>" class="download-btn" download>
                    <span class="download-icon">📥</span>
                    Download FishOn App
                </a>
                <p style="margin-top: 22px; color: #64748b; font-size: 14px; font-weight: 500;">Compatible with Android devices</p>
            </div>


        </div>

        <div class="footer">
            <p>&copy; <?php echo date('Y'); ?> FishOn. All rights reserved.</p>
            <p style="margin-top: 10px;">Questions? Contact us at fishon.app@gmail.com</p>
        </div>
    </div>
</body>
</html>