<?php
declare(strict_types=1);
include "Controller/CategoryController.php";
include "Controller/DetailController.php";



if (!isset($_GET['page'])) {
    $a = new CatergoryController();
    $a->render();
}elseif (isset($_GET['page'])) {
    $detailController = new DetailController();
    $detailController->render();
}elseif ($_GET['product'] === 'Blue Jeans') {
    include "View/productDetailView.php";
}