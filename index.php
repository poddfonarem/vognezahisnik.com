<?php
    require_once __DIR__ . '/includes/build/build.php';
    global $html, $header, $footer;
    echo $html, $header;
?>

<section class="hero">
    <h1>Протипожежне обладнання</h1>
    <p>Послуги з виготовлення та сервісу</p>
    <a class="button" href="#products">Всі послуги</a>
</section>

<section id="products" class="products">
    <h2>Ми виготовляємо</h2>
    <div class="product-list">
      <?php
        require_once __DIR__ . '/includes/state/category_array.php';
        require_once __DIR__ . '/includes/functions/func.php';
        global $products;
        echo generateProductCategory($products);
      ?>
    </div>
</section>

<section id="about" class="about">
            <div class="content">
                <h1>Протипожежне обладнання та засоби пожежогасіння</h1>
                <p>Компанія ПП “Вогнезахисник” пропонує великий вибір обладнання та комплекс послуг, пов'язаних з пожежною безпекою.</p>
                <a href="/about.php" class="button">Про Нас</a>
            </div>
</section>

<section id="advantages" class="advantages">
    <div class="container">
        <div class="text-section">
            <h2>Наші головні переваги</h2>
            <p>
                Компанія представлена на ринку більше 10 років. За цей час ми організували виробництво широкого
                асортименту обладнання, що дозволяє здійснити комплексний підхід до забезпечення пожежної безпеки.
            </p>
        </div>
        <div class="image-grid">
            <img src="/images/category-product/1.jpg" alt="Вогнегасники">
            <img src="/images/category-product/2.jpg" alt="Протипожежний щит">
            <img src="/images/category-product/3.jpg" alt="Перевірка обладнання">
            <img src="/images/category-product/4.jpg" alt="Захисне спорядження">
        </div>
    </div>
</section>
<?=$footer?>
