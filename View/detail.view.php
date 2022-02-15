<?php
declare(strict_types=1);
function getDetails()

{
    $jeansArray = [1 => 'Blue Jeans', 2 => 'Black Jeans', 3 => "Ripped Jeans"];

    if ($_GET['page'] === 'Jeans') {
        foreach ($jeansArray as $items) {
           ?> <p> <a href="/index.php?product?=Blue Jeans"> <?php echo $items ?> </p><br> <?php ;
        }
    }

}
getDetails();