/**
 * @file: schools_js.js
 * @description: Javascript code for 'schools.php'
 */


/**
 * Upon loading 'uniforms.php', this function will load all the available uniforms
 * as listed in the associative array 'uniforms'
 */
window.onload = function() {
    let uniforms = {
        'BLOUSE' : ['blouse.jpg', 'WOMEN'],
        'POLO' : ['polo.jpg', 'MEN'],
        'WOMEN\'S PANTS' : ['women_pants.jpg', 'WOMEN'],
        'SKIRT' : ['skirt.jpg', 'WOMEN'],
        'MEN\'S PANTS' : ['men_pants.jpg', 'MEN'],
        'NSTP SHIRT' : ['nstp.jpg', 'UNISEX'],
        'PE SHIRT' : ['pe_uni_shirt.jpg', 'UNISEX'],
        'PE PANTS' : ['pe_uni_pants.jpg', 'UNISEX'],
    }
    
    for (let uniform in uniforms) {
        print_uniforms(uniforms[uniform][0], uniforms[uniform][1], uniform);
    }
};

// Function to print a uniform
function print_uniforms(uni_img, uni_gen, uni_name){
    let parent = document.getElementById('uniform-pg');
    let card = document.createElement('div');
    card.className = 'card';
    card.style.width = '20rem';
    card.style.cursor = 'pointer';
    card.innerHTML= `
        <img src="images/uniforms/${uni_img}" class="card-img-top" alt="">
        <div class="card-body">
            <div class="gen-size-info">
                <span>${uni_gen}</span>
                <span>S-XL</span>
            </div>
            <span class="card-title">${uni_name}</span>
        </div>
    `;
    card.addEventListener('click', function() {
        window.location.href = `?uniform=${uni_name}`;
    });
    parent.appendChild(card);
}

// Function for '-' button in 'Quantity'
function decrement() {
    let quantityInput = document.getElementById('quantity');
    let currentValue = parseInt(quantityInput.value);
    if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
    }
}

// Function for '+' button in 'Quantity'
function increment() {
    let quantityInput = document.getElementById('quantity');
    let currentValue = parseInt(quantityInput.value);
    if(currentValue < 10){
        quantityInput.value = currentValue + 1;
    }
}

// Function for size chosen in 'SIZE'
document.addEventListener("DOMContentLoaded", function() {
    var sizeChosen = document.getElementById("size-chosen");
    var radios = document.getElementsByName("radio");

    // Function to update size chosen
    function updateSizeChosen() {
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                sizeChosen.textContent = radios[i].value;
                break;
            }
        }
    }

    // Add event listener to each radio button
    for (var i = 0; i < radios.length; i++) {
        radios[i].addEventListener("change", updateSizeChosen);
    }

    // Initial update
    updateSizeChosen();
});

