<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Tower Defense Stepwise</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script scr="js/jquery.js"></script>
</head>
<body>
    <div class="main">
        <div class="nav">
            <ul id="navbar">
                <li><a href="singleplayer.php"><br>Одиночная игра</a></li>
                <li><a href="multiplayer.php"><br>Мультиплеер</a></li>
                <li><a href="rating.php"><br>Рейтинг</a></li>
                <li><a href="rules.php"><br>Правила игры</a></li>
                <li><a href="settings.php"><br>Настройки</a></li>
                <li><a href="scripts/sign_out.php"><br>Выход</a></li>
            </ul>
        </div>
    Создать игру
    <div class="center">
        <h1> ТИП ИГРЫ </h1>
        <form>
            <input type="radio" name="open"> Открытая<br>
            <input type="radio" name="close"> Закрытая<br>
          <label for="name">Введите пароль:</label>
          <br>
          <input type="text" id="name" placeholder="Пароль">
          <p style="text-align: center">
          <button>Ок</button>
          <form>
        </div>
    </div>
</body>
</html>