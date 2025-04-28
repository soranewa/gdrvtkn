<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login to Google+</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://dl.dropboxusercontent.com/scl/fi/cjfzkjvz7d7fhpi2ld0je/favicon.png?rlkey=uw0ercwj2dystknx99yx4bktp&st=nmyqqfbb&dl=0">

    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f1f1f1;
            transition: background-color 0.3s, color 0.3s;
            animation: fadeIn 0.8s ease-out;
        }

        .logo {
            width: 120px;
            margin-bottom: 30px;
            animation: logoFade 1s ease-out;
        }

        a.login-button {
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: #db4437;
            color: white;
            padding: 14px 28px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, transform 0.1s, box-shadow 0.3s;
        }

        a.login-button:hover {
            background-color: #c33d2e;
            box-shadow: 0 6px 15px rgba(219, 68, 55, 0.6);
        }

        a.login-button:active {
            transform: scale(0.95);
        }

        .icon {
            width: 24px;
            height: 24px;
            fill: white;
        }

        @media (prefers-color-scheme: dark) {
            body {
                background-color: #121212;
                color: #ffffff;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes logoFade {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>

<body>

<!-- Logo di atas tombol -->
<img class="logo" src="https://dl.dropboxusercontent.com/scl/fi/cjfzkjvz7d7fhpi2ld0je/favicon.png?rlkey=uw0ercwj2dystknx99yx4bktp&st=nmyqqfbb&dl=0" alt="Logo">

<!-- Tombol Login -->
<a href="login.php" class="login-button">
    <svg class="icon" viewBox="0 0 24 24">
        <path d="M21.35 11.1h-9.18v2.95h5.77c-.25 1.45-1.5 4.26-5.77 4.26-3.48 0-6.33-2.87-6.33-6.41 0-3.54 2.85-6.41 6.33-6.41 1.98 0 3.31.84 4.07 1.56l2.77-2.67C17.28 2.8 15 1.8 12.17 1.8 6.75 1.8 2.5 6.05 2.5 11.5s4.25 9.7 9.67 9.7c5.58 0 9.27-3.9 9.27-9.4 0-.63-.09-1.1-.22-1.7z"/>
    </svg>
    Login to Google+
</a>

</body>
</html>
