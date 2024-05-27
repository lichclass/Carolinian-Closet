<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schools of USC</title>
    <link rel="stylesheet" href="/Carolinian Closet Website/styles/genstyles.css">
    <link rel="stylesheet" href="/Carolinian Closet Website/styles/schools_styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
</head>
<body>
    <!-- Navigation bars -->
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


<!-- JS SCRIPT FOR SCHOOLS -->
<script src="js/schools_js.js"></script>

<!-- Content -->
<?php
include 'functions.php';

if(!isset($_GET['school'])){
    ?>
    <div class="container-fluid" id="back-btn">
        <span class="material-symbols-outlined" onclick="window.location.href='index.php';">arrow_back</span>
    </div>
    <div class="container-header">
        <span class="pg-heading" style="color: #117042">Schools of USC</span>
    </div>
    <div class="container">
        <div class="row" id="schools-pg"></div>
    </div>
    <?php
} else {
    ?>
    <div class="container-fluid" id="back-btn">
        <span class="material-symbols-outlined" onclick="window.location.href='schools.php';">arrow_back</span>
    </div>
    <?php
    // School code and their corresponding Name and Colors
    $schools = array(
        "SBE" => ["SCHOOL OF BUSINESS AND ECONOMICS", "#196115", "#117042"],
        "SAFAD" => ["SCHOOL OF ARCHITECTURE, FINE ARTS, AND DESIGN", "#87181f", "#ac3535"],
        "SAS" => ["SCHOOL OF ARTS AND SCIENCES", "#121269", "#5252ac"],
        "SHCP" => ["SCHOOL OF HEALTH CARE PROFESSIONS", "#5c2b7d", "#791679"],
        "SOE" => ["SCHOOL OF ENGINEERING", "#f4e456", "#d6c850"],
        "SLG" => ["SCHOOL OF LAW AND GOVERNANCE", "#737373", "#737373"],
        "SOED" => ["SCHOOL OF EDUCATION", "#add8e6", "#add8e6"]
    );

    // Check if $_GET['school'] exists from $schools
    if(array_key_exists($_GET['school'], $schools)){
        ?>
        <div class="container-header">
            <span class="heading" style="color:<?php echo $schools[$_GET['school']][1] ?>"><?php echo $_GET['school'] ?></span><br>
            <span class="heading-2" style="color:<?php echo $schools[$_GET['school']][2] ?>"><?php echo $schools[$_GET['school']][0] ?></span>
        </div>
        <div class="container-fluid">
            <div class="row" id="school-actual">
                <?php
                    merch_loader($_GET['school'], $schools[$_GET['school']][2]);
                ?>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="head-error">
            <span class="material-symbols-outlined">error</span><br>
            <span>Invalid School Code</span>
        </div>
        <?php
    }
}
?>    

</body>
</html>