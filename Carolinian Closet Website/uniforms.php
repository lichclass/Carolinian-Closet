<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uniforms</title>
    <link rel="stylesheet" href="styles/genstyles.css">
    <link rel="stylesheet" href="styles/uniform_styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
</head>
<body>

    <!-- Navigation Bars -->
    <nav class="nav-proxy"></nav>
    <nav class="nav-actual">
    <div class="usc-logo-nav">
        <a href="index.php"><img src="images/University_of_San_Carlos_logo.png" alt="University_of_San_Carlos_logo"></a>
        <div class="cc-logo">
            <a href="index.php">
            <span class="carolinian">Carolinian</span><br>
            <span class="closet">Closet</span>
            </a>
        </div>
        
    </div>
    <div class="icons-nav">
        <a href=""><span class="material-symbols-outlined">search</span></a>
        <a href=""><span class="material-symbols-outlined">person</span></a>
        <a href=""><span class="material-symbols-outlined">favorite</span></a>
        <a href="orders.php"><span class="material-symbols-outlined">shopping_cart</span></a>
    </div>
    </nav>

    <!-- Javascript for Uniforms -->
    <script src="js/uniforms_js.js"></script>

<!-- Content -->
<?php

if(!isset($_GET['uniform'])) {
    ?>
    <div class="container-fluid" id="back-btn">
        <span class="material-symbols-outlined" onclick="window.location.href='index.php';">arrow_back</span>
    </div>
    <div class="container-header">
        <span class="pg-heading" style="color: #117042">Uniform</span>
    </div>
    <div class="container">
        <div class="row" id="uniform-pg">
        </div>
    </div>
    <?php
} else {
    include "functions.php";
    ?>
    <div class="container-fluid" id="back-btn">
        <span class="material-symbols-outlined" onclick="window.location.href='uniforms.php';">arrow_back</span>
    </div>
    <?php
    uniform_order_loader($_GET['uniform']);
}
?>

</body>
</html>