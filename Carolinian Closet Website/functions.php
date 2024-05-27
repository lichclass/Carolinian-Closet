<?php
/**
 * @file: functions.php
 * @description: Contains all the PHP functions used in all pages
 */


// Function for loading a merch. Used in: 'schools.php'
function merch_loader($school, $color){
    
    // Flag if a certain merch exists
    $exists = 0;

    if(($open = fopen("merch_data.csv", "r")) !== false){
        while(($data = fgetcsv($open, 1000, ",")) !== false){
            if(trim($data[0]) == $school){
                
                $exists = 1;
                
                // Checks if the merch contains an image
                $image = trim($data[1]);
                $style = (!empty($image)) ? 'background-image: url(\'images/merch/' . $image . '\');' : '';
                $style .= ' background-color: ' . $color . ';';

                echo '<div class="merch">';
                echo '    <div class="merch-img" style="' . $style . ' border: solid 2px ' . $color . '"></div>';
                echo '    <div class="colors">';
                for ($i = 7; $i < count($data); $i++) {
                    echo '        <div class="color-avail" style="background-color: ' . trim($data[$i]) . ';"></div>';
                }
                echo '    </div>';
                echo '    <div class="gen-size-info">';
                echo '        <span>' . trim($data[2]) . '</span><span>S-XL</span>';
                echo '    </div>';
                echo '    <div class="merch-info">';
                echo '        <span class="card-title">' . trim($data[3]) . '</span><br>';
                echo '        <span class="card-title">' . trim($data[4]) . '</span>';
                echo '    </div>';
                echo '    <div class="merch-price">PHP ' . trim($data[5]) . '</div>';
                echo '</div>';
            }
        }
        fclose($open);
    }

    if(!$exists){
        echo '<h1>Merch Does not exist</h2>';
    } 
}


// Function for loading a specific uniform. Used in 'uniforms.php'
function uniform_order_loader($uniform){

    // Flag if a certain merch exists
    $exists = 0;

    if(($open = fopen("uniforms_data.csv", "r")) !== false){
        while(($data = fgetcsv($open, 1000, ",")) !== false){
            if(trim($data[0]) == $uniform){
                
                $exists = 1;

                echo '<div class="container" id="order">';
                echo '    <div class="row">';
                echo '        <div class="col-sm-6" id="order-uni-img">';
                echo '            <img src="images/uniforms/'.$data[1].'" alt="">';
                echo '        </div>';
                echo '        <div class="col-sm-6" id="order-info">';
                echo '            <div class="uniform-desc">';
                echo '                <p class="gender-uni">'.$data[2].'<br>';
                echo '                    <span class="name-uni">'.$uniform.'</span>';
                echo '                </p>';
                echo '                <p class="price-uni">PHP '.$data[3].'</p>';
                echo '            </div>';
                echo '            <div>';
                echo '                <form method="post" action="orders.php">';
                echo '                    <input type="hidden" name="uniform-name" value="'.$uniform.'">';
                echo '                    <input type="hidden" name="image" value="'.$data[1].'">';
                echo '                    <input type="hidden" name="gender" value="'.$data[2].'">';
                echo '                    <input type="hidden" name="price" value="'.$data[3].'">';
                echo '                    <p class="form-label">SIZE: '.$data[4].' <span id="size-chosen"></span></p>';
                echo '                    <div class="sizes-container">';
                for($i = 5; $i < count($data); $i++){
                    echo '                        <div class="input-container">';
                    echo '                            <input id="'.$data[$i].'" type="radio" name="radio" value="'.$data[$i].'" required>';
                    echo '                            <label class="radio-tile">'.$data[$i].'</label>';
                    echo '                        </div>';
                }
                echo '                    </div>';
                echo '                    <p class="form-label">QUANTITY</p>';
                echo '                    <div class="quantity-container">';
                echo '                        <span class="material-symbols-outlined" onclick="decrement()">remove</span>';
                echo '                        <input type="number" id="quantity" name="quantity" value="1">';
                echo '                        <span class="material-symbols-outlined" onclick="increment()">add</span>';
                echo '                    </div>';
                echo '                    <input type="submit" id="add-to-cart" name="add-to-cart" value="ADD TO CART">';
                echo '                </form>';
                echo '            </div>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
                break;
            }
        }
        fclose($open);
    }

    if(!$exists){
        echo '<div class="head-error">
                    <span class="material-symbols-outlined">error</span><br>
                    <span>"'.htmlspecialchars($_GET['uniform']).'" does not exist!</span>
                </div>';
    }

}


// Customer orders builder
function customer_orders_loader() {
    $isEmpty = 1;

    if (($open = fopen("orders.csv", "r")) !== false) {
        // Skip the first row (header)
        if (fgets($open) !== false) {
            while (($data = fgetcsv($open, 1000, ",")) !== false) {
                $isEmpty = 0;

                echo '<div class="customer-order">';
                echo '    <div class="customer-order-info">';
                echo '        <img src="images/uniforms/' . $data[1] . '" alt="">';
                echo '        <div class="customer-order-details">';
                echo '            <p class="cust-order-uni-name">' . $data[0] . '</p>';
                echo '            <div class="order-gen-size-quant">';
                echo '                <span>' . $data[2] . '&emsp;&emsp;' . $data[3] . '</span>';
                echo '                <span>x' . $data[4] . '</span>';
                echo '            </div>';
                echo '        </div>';
                echo '    </div>';
                echo '    <hr>';
                echo '    <span class="order-total">Order Total: PHP ' . $data[5] . '</span>';
                echo '</div>';
            }
        }
        fclose($open);
    }

    if ($isEmpty) {
        echo '<div class="head-error">
                <span>No orders have been made yet:(</span>
              </div>';
    } else {
        echo '<form method="post" action="orders.php">';
        echo '    <button class="btn btn-danger" name="reset-orders">Reset All Orders</button>';
        echo '</form>';
    }
}




?>