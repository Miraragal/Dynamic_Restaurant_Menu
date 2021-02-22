<?php
define('TITLE', "Milo's TEAM");
include('components/header.php');
?>

<div id="team-members" class='cf'>
    <hr>
    <h1>Our Team at Milo's</h1>
    <p>We're small, but mighty. Milo's Fine Dining has been a family-owned and run business since the dirty thirties, and we're proud of it! When you get these three together, you never know what can happen. But you can count on one thing:
        <br><strong>The best food you've ever had. Ever.</strong>
    </p>

    <hr>

    <?php
    foreach ($teamMembers as $member) {
    ?>
        <div class="member">
            <img src="img/<?php echo $member['img']; ?>.png" alt="<?php echo $member['name']; ?>">
            <h3><?php echo $member['name']; ?></h3>
            <p><?php echo $member['bio']; ?></p>
        </div>
    <?php
    }
    ?>

</div> <!-- team-members -->