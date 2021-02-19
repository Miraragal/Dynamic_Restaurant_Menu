<?php 
$companyName="Milo's Fine Dinning";
include('components/arrays.php')
?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP <?php echo TITLE; ?></title>
    <link href="../assets/styles.css" rel="stylesheet">
</head>

<body id="final-example">
    <div class='wrapper'>

        <div id='banner'>
            <a href='/' title="Return to Home">
                <img src="img/banner.jpg" alt="Milo's Fine Dinning" />
            </a>
        </div><!-- banner -->
        <div id='nav'>
            <?php include('components/nav.php') ?>
        </div> <!-- nav -->


        <div class='content'>