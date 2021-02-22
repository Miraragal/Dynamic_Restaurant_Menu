<?php
define('TITLE', "Milo's MENU ITEM");

include('components/header.php');

// encript headers
function strip_bad_chars($input)
{
    $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
}

if (isset($_GET['item'])) {
    $menuItem = strip_bad_chars($_GET['item']);
    $dish = $menuItems[$menuItem];
}

// Calculate tips
function suggetedTip($price, $tip)
{
    $totalTip = $price * $tip;
    echo number_format("%i", $totalTip);
}
?>

<hr>
<div id='dish'>
    <h1><?php echo $dish['title']; ?><span class='price'><sup>$</sup><?php echo $dish['price']; ?></span></h1>
    <p><?php echo $dish['blurb']; ?></p>
    <br>
    <p><strong>Suggested beverage: <?php echo $dish['drink']; ?></strong></p>
    <p><em>Suggested tip: <sup>$</sup><?php suggetedTip($dish['price'], 0.15); ?></em></p>
</div>
<hr>
<a href='menu.php' class="nav">&laquo;Back to Menu</a>