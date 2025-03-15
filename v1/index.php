<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localhost</title>
    <link rel="icon" href="./germer.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div id="left-section">
            <h1>Welcome to localhost 🏠🚀🔧</h1>
            <div>
                <h2>Accès rapide :</h2>
                <ul>
                    <a href="./MyTwitter/"><li>MyTwitter</li></a>
                    <a href="./my_meetic"><li>MyMeetic</li></a>
                </ul>
            </div>
        </div>
        <div id="right-section">
            <h2>📁 List of folders :</h2>
            <ul>
                <?php
                    include_once __DIR__ . "/scandir.php";
                ?>
            </ul>
        </div>
    </div>
</body>
</html>

