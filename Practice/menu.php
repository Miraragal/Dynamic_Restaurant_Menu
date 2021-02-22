<?php
define('TITLE', "Milo's MENU");

include('components/header.php');
?>

<div id='menu-items'>
    <hr>
    <h1>Our Delicious Menu</h1>
    <p>Like our team, our menu is very small &mdash; but dang, does it ever pack a punch!</p>
    <p><em>Click any menu item to learn more about it.</em></p>
    <hr>
    <ul>
        <!-- multidimensional array -->
        <?php foreach ($menuItems as $dish => $item) { ?>
            <!-- access to echo item multidimensional array -->
            <li><a href="dish.php?item=
        <?php echo $dish; ?>">
                    <?php echo $item['title']; ?>
                </a>
                <sup>$</sup>
                <?php echo $item['price']; ?>
            </li>
        <?php } ?>


    </ul>
</div>