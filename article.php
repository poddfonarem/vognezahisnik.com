<?php
require_once __DIR__ . '/includes/build/build.php';
echo $html ?? '', $header ?? '';
require_once __DIR__ . '/includes/state/article_array.php';
require_once __DIR__ . '/includes/functions/func.php';
?>
<section class="products">
    <h2>Всі статті</h2>
    <div class="product-list">
        <?=generateArticle($articles ?? '')?>
    </div>
</section>
<?=$footer ?? ''?>
