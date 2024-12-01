<?php
session_start();
$formPanel = $_GET['page'] ?? '';
if ($formPanel === 'authorization') {$heading_h1 = 'Вхід';}
else if ($formPanel === 'registration') {$heading_h1 = 'Реєстрація';}
else{$heading_h1 = 'Error';}
?>
<!DOCTYPE html>
<html lang='uk'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title><?=$heading_h1?> - ПП "Вогнезахисник"</title>
    <link rel='icon' href='/images/favicon.png'>
    <link rel='stylesheet' href='/css/styles.css'>
    <link rel='stylesheet' href='/css/login.css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' rel='stylesheet'>
</head>
<body style="background:#111">
    <div class="sign-in">
        <div class="content">
            <?php
            if ($formPanel === 'authorization') {
               echo '
                <h2>Авторизація</h2>
                <form  method="POST" action="#" class="form">
                    <div class="inputBox">
                        <label>
                            <input type="email" name="email" placeholder="Введіть Email" required>
                        </label>
                    </div>
                    <div class="inputBox">
                        <label>
                            <input type="password" name="password" placeholder="Введіть пароль" required>
                        </label>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Увійти">
                    </div>
                    <div class="links"><a href="login.php?page=registration">Немає акаунту? <i class="fas fa-arrow-right"></i> зареєструйтесь!</a>
                    </div>
                </form>
               ';
                //require_once __DIR__ . '/includes/test/loginTest.php';

            } else if ($formPanel === 'registration') {
                echo '
                <h2>Реєстрація</h2>
                <form method="POST" action="#" class="form">
                    <div class="inputBox">
                        <label>
                            <input type="email" placeholder="Введіть Email" required>
                        </label>
                    </div>
                     <div class="inputBox">
                        <label>
                            <input type="tel" placeholder="Введіть Номер телефону" required>
                        </label>
                    </div>
                    <div class="inputBox">
                        <label>
                            <input type="text" placeholder="Введіть Прізвище Ім`я По-батькові" required>
                        </label>
                    </div>
                    <div class="inputBox">
                        <label>
                            <input type="password" placeholder="Придумайте пароль" required>
                        </label>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Зареєструватись">
                    </div>
                    <div class="links"><a href="login.php?page=authorization">Уже маєте акаунт? <i class="fas fa-arrow-right"></i> увійдіть!</a>
                    </div>
                </form>
                ';
            } else {
                header('Location:/login.php?page=authorization');
            }
            ?>
        </div>
    </div>
</body>
</html>