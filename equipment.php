<?php
$formPanel = $_GET['eq'] ?? '';
if ($formPanel === 'fire_extinguishers') {$heading_h1 = 'Вогнегасники';}
else if ($formPanel === 'fire_cabinet') {$heading_h1 = 'Пожежні щити';}
else if ($formPanel === 'inventory') {$heading_h1 = 'Інвентар';}
else{$heading_h1 = 'Категорії товарів';}

require_once __DIR__ . '/includes/build/build.php';
echo $html ?? '', $header ?? '';

switch ($formPanel) {
    case 'fire_extinguishers':
        $h2 = 'Вогнегасники';
        $require = '';
        break;
    case 'fire_cabinet':
        $h2 = 'Протипожежні щити';
        $require = '';
        break;
    case 'inventory':
        $h2 = 'Пожежний інвентар';
        $require = '';
        break;
    default:
        $h2 = 'Ми виготовляємо';
        $require = '/includes/state/category_array.php';
        break;
}


?>

<section id="products" class="products">
    <h2><?=$h2?></h2>
    <div class="product-list">
        <?php
        if($require !== ''){
            require_once __DIR__ . $require;
            require_once __DIR__ . '/includes/functions/func.php';
            global $products;
            echo generateProductCategory($products);
        }else{
            echo "<h3>Товари відсутні!</h3>";
        }
        ?>
    </div>
</section>

<?=$footer ?? ''?>
