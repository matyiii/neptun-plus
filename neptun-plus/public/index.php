<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neptun+</title>
    <style>
        /* CSS a felugró ablakhoz */
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

        /* CSS a szürke háttérhez */
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
    </style>
</head>
<body>
    <h2>Bejelentkezés</h2>
    <button onclick="openPopup()">Bejelentkezés</button>

    <!-- Felugró ablak -->
    <div class="overlay" id="overlay"></div>
    <div class="popup" id="popup">
        <div class="popup-content">
            <h2>Bejelentkezés</h2>
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
        // JavaScript a felugró ablak vezérléséhez
        function openPopup() {
            document.getElementById("overlay").style.display = "block";
            document.getElementById("popup").style.display = "block";
        }

        function closePopup() {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("popup").style.display = "none";
        }
    </script>
</body>
</html>
