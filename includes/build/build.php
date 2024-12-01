<?php
$html = "
<!DOCTYPE html>
<html lang='uk'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Протипожежне обладнання</title>
    <link rel='icon' href='/images/favicon.png'>
    <link rel='stylesheet' href='/css/styles.css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' rel='stylesheet'>
</head>
<body>
";

$header = "
<header class='header'>
    <div class='container'>
        <div class='logo'><a href='/'>ПП «Вогнезахисник»</a></div>
        <nav class='nav'>
            <a href='/article.php'>Статті</a>
            <a href='/equipment.php'>Продукція</a>
            <a href='/about.php'>Про Нас</a>
            <a href='/feedback.php'>Відгуки</a>
        </nav>
        <div>
            <a class='button' href='/login.php?page=authorization'>Вхід</a>
            
            <label>
                <a class='clear-button' id='searchButton' onclick='return'>
                    <i class='fas fa-search'></i>
                </a>
                <input type='text' id='searchField' class='search-field' placeholder='Введіть запит...'>
            </label>
        </div>
    </div>
</header>";

$footer = "
<footer class='footer'>
    <div class='footer-container'>
        <div class='footer-column'>
            <div class='logo'>ПП «Вогнезахисник»</a></div>
            <p> &copy; <script>document.write(new Date().getFullYear())</script>
                ПП «Вогнезахисник» Протипожежне обладнання 
            </p>
        </div>
        <div class='footer-column'>
            <h3>Клієнтам</h3>
            <ul>
                <li><a href='/article.php'>Статті</a></li>
                <li><a href='/equipment.php'>Продукція</a></li>
                <li><a href='/about.php'>Про Нас</a></li>
                <li><a href='/feedback.php'>Відгуки</a></li>
            </ul>
        </div>
        <div class='footer-column'>
            <h3>Виготовлення</h3>
            <ul>
                <li><a href='/equipment.php?eq=fire_extinguishers'>Вогнегасники</a></li>
                <li><a href='/equipment.php?eq=fire_cabinet'>Шафи, щити, стенди</a></li>
                <li><a href='/equipment.php?eq=inventory'>Пожежні рукави, крани,
                                гідранти, мотопомпи</a></li>
            </ul>
        </div>
        <div class='footer-column'>
            <h3>Контакти</h3>
            <p>Телефон: <a href='tel:0999876423'>+38 (099) 987-64-23</a></p>
            <p>Email: <a href='mailto:service@vognegasnik.com'>service@vognegasnik.com</a></p>
            <p>Адреса: м. Суми, вул. Сумська 4</p>
        </div>
    </div>
</footer>
<script src='/js/main.js'></script>
</body>
</html>";