<?php
function getHeadingValues($formPanel): array
{
    $heading_h1 = ''; $h2 = ''; $require = '';

    if ($formPanel === 'fire_extinguishers') {
        $heading_h1 = 'Вогнегасники';
    } else if ($formPanel === 'fire_cabinet') {
        $heading_h1 = 'Пожежні щити';
    } else if ($formPanel === 'inventory') {
        $heading_h1 = 'Інвентар';
    } else {
        $heading_h1 = 'Категорії товарів';
    }
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
    return [$heading_h1, $h2, $require];
}

use PHPUnit\Framework\TestCase;

class FormPanelTest extends TestCase
{
    public function testGetHeadingValues()
    {
        $_GET['eq'] = 'fire_extinguishers';
        list($heading_h1, $h2, $require) = getHeadingValues($_GET['eq']);
        $this->assertEquals('Вогнегасники', $heading_h1);
        $this->assertEquals('Вогнегасники', $h2);
        $this->assertEquals('', $require);

        $_GET['eq'] = 'fire_cabinet';
        list($heading_h1, $h2, $require) = getHeadingValues($_GET['eq']);
        $this->assertEquals('Пожежні щити', $heading_h1);
        $this->assertEquals('Протипожежні щити', $h2);
        $this->assertEquals('', $require);

        $_GET['eq'] = 'inventory';
        list($heading_h1, $h2, $require) = getHeadingValues($_GET['eq']);
        $this->assertEquals('Інвентар', $heading_h1);
        $this->assertEquals('Пожежний інвентар', $h2);
        $this->assertEquals('', $require);

        $_GET['eq'] = '';
        list($heading_h1, $h2, $require) = getHeadingValues($_GET['eq']);
        $this->assertEquals('Категорії товарів', $heading_h1);
        $this->assertEquals('Ми виготовляємо', $h2);
        $this->assertEquals('/includes/state/category_array.php', $require);
    }
}

