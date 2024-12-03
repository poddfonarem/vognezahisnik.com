<?php
require_once __DIR__ . '/includes/build/build.php';
echo $html ?? '', $header ?? '';
?>
<section class="feedback-form">
    <form id="feedbackForm" method="POST" action="#">
        <label for="message">Ваш відгук:</label>
        <textarea id="message" name="review_text" rows="9" placeholder="Напишіть ваш відгук"></textarea>
        <button type="submit">Опублікувати</button>
    </form>
</section>
<?php //require_once __DIR__ . "/includes/test/reviewTest.php";?>
<section class="feedback-list">
    <h2>Опубліковані відгуки</h2>
   <?php
    require_once __DIR__ . '/includes/state/reviews_array.php';
    require_once __DIR__ . '/includes/functions/func.php';
    global $reviews;
    echo generateReviews($reviews);
   ?>
</section>
<?=$footer ?? ''?>