<?php
session_start();

function testAddReview($user, $reviewText): array
{
    if (!$user['isAuthorized']) {
        return [
            "success" => false,
            "message" => "Додати відгук можуть лише авторизовані користувачі!"
        ];
    }

    if (empty($reviewText)) {
        return [
            "success" => false,
            "message" => "Текст відгуку обов'язковий!"
        ];
    }

    return [
        "success" => true,
        "message" => "Відгук успішно додано!"
    ];
}

if (!isset($_SESSION['isAuthorized']) || !$_SESSION['isAuthorized']) {
    echo "<p style='color: red;'>Вам необхідно авторизуватися для додавання відгуку!</p>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $reviewText = $_POST['review_text'];

    $authorizedUser = ["isAuthorized" => true];
    $reviewResult = testAddReview($authorizedUser, $reviewText);

    if ($reviewResult['success']) {
        echo "<p style='color: green;'>{$reviewResult['message']}</p>";
    } else {
        echo "<p style='color: red;'>{$reviewResult['message']}</p>";
    }
}