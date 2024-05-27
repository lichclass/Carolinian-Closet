<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carolinian Closet</title>
    <link rel="stylesheet" href="styles/genstyles.css">
    <link rel="stylesheet" href="styles/homepage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <style>
        .welcome-pg {
            background: url('images/landing1.jpg') no-repeat center center / cover;
        }

        .uniforms {
            background: url('images/uniform_pg.jpg') no-repeat #f6f6f6 left center / contain;
        }

        .schools {
            background: url('images/schools_pg.png') no-repeat #f6f6f6 right center / contain;
        }
    </style>
</head>
<body>

<!-- Navigation bar -->
<nav class="nav-proxy"></nav>
<nav class="nav-actual">
    
    <div class="usc-logo-nav">
        <img src="images/University_of_San_Carlos_logo.png" alt="University_of_San_Carlos_logo">
    </div>
    <div class="icons-nav">
        <a href=""><span class="material-symbols-outlined">search</span></a>
        <a href=""><span class="material-symbols-outlined">person</span></a>
        <a href=""><span class="material-symbols-outlined">favorite</span></a>
        <a href="orders.php"><span class="material-symbols-outlined">shopping_cart</span></a>
    </div>
</nav>

<!-- Contents -->
<div class="landing-pg-container">
    <div class="welcome-pg">
        <span class="carolinian">Carolinian</span><br>
        <span class="closet">Closet</span>
    </div>
    <div class="pages">
        
        <!-- Uniforms -->
        <div class="uniforms">
            <div class="page-redirect-text">
                <span class="category-title">Uniforms</span>
                <a href="uniforms.php">
                    <span>shop now</span> 
                    <span class="material-symbols-outlined">arrow_right_alt</span>
                </a>
            </div>
        </div>

        <!-- Schools of USC -->
        <div class="schools">
            <div class="page-redirect-text">
                <span class="category-title">Schools of USC</span>
                <a href="schools.php">
                    <span>shop now</span> 
                    <span class="material-symbols-outlined">arrow_right_alt</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Transactions -->
    <div class="transaction">
        <div>
            <a href="orders.php">
            <span class="material-symbols-outlined">shopping_cart</span>
            <span>Order Updates</span>
            </a>
        </div>
                
        <div>
            <a href="#">
            <span class="material-symbols-outlined">receipt_long</span>
            <span>Receipt</span>
            </a>
        </div>
    </div>

</div>

<footer>
</footer>

</body>
</html>