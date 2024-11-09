<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Footer with Icons</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }
        .credits {
            margin: 0;
            font-size: 18px;
        }
        .social-icons a {
            color: #fff;
            margin: 0 15px;
            font-size: 24px;
            transition: color 0.3s;
        }
        .social-icons a:hover {
            color: #f39c12; /* Change to your desired hover color */
        }
    </style>
</head>
<body>

    <!-- Your content goes here -->

    <footer>
        <div class="container text-center">
            <p class="credits">
                &copy; 2023 ART GALLERY
            </p>
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/steller_editz/?igsh=YzljYTk1ODg3Zg%3D%3D" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com/@StellerEditz" target="_blank" aria-label="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </footer>

</body>
</html>