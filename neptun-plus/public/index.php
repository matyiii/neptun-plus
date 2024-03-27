<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neptun+</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('hatterkep.webp'); 
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            }
        
        nav {
            display: flex;
            justify-content: space-between; 
            align-items: center;
            position: absolute; 
            width: 100%;
            top: 50%; 
            transform: translateY(-50%); 
            padding: 0 30px;
            }
        nav {
            
            
            color: white;
            text-align: center;
        }

        nav a {
            color: rgb(59, 35, 35);
            text-decoration: none;
            margin-right: auto;
            margin-left: auto;
            cursor: pointer;
            font-family: 'Roboto', sans-serif; 
            font-weight: bold; 
            font-size: 24px; 
            color: #1b1010; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); 
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 998;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            z-index: 999;
        }

        .popup-content {
            text-align: center;
        }
    </style>
</head>
<body>
    <nav>
        <a onclick="openPopup('hallgato')">Hallgató</a>
        <a onclick="openPopup('oktato')">Oktató</a>
    </nav>


    <div class="overlay" id="overlay"></div>
    <div class="popup" id="popup">
        <div class="popup-content">
            <h2 id="popupTitle"></h2>
            <form action="login.php" method="post">
                <label for="username">Felhasználónév:</label><br>
                <input type="text" id="username" name="username" required><br>
                <label for="password">Jelszó:</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Bejelentkezés">
            </form>
            <button onclick="closePopup()">Bezárás</button>
        </div>
    </div>

    <script>
      
        function openPopup(userType) {
            document.getElementById("overlay").style.display = "block";
            document.getElementById("popup").style.display = "block";
            document.getElementById("popupTitle").innerText = userType === 'hallgato' ? 'Hallgató bejelentkezés' : 'Oktató bejelentkezés';
        }

        function closePopup() {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("popup").style.display = "none";
        }
    </script>
</body>
</html>