<?php
session_start();

function testLogin($data): array{
    if (empty($data['email']) || empty($data['password'])) {
        return [
            "success" => false,
            "message" => "Пошта та пароль обов'язкові!"
        ];
    }

    if ($data['email'] === "user@example.com" && $data['password'] === "securepassword") {
        return [
            "success" => true,
            "message" => "Авторизація успішна!"
        ];
    }

    return [
        "success" => false,
        "message" => "Невірна пошта або пароль!"
    ];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $testData = ["email" => $email, "password" => $password];
    $loginResult = testLogin($testData);

    if ($loginResult['success']) {
        $_SESSION['isAuthorized'] = true;
        echo "<p style='color: green;'>{$loginResult['message']}</p>";
        header("Location: /feedback.php");
        exit();
    } else {
        echo "<p style='color: red;'>{$loginResult['message']}</p>";
    }
}
