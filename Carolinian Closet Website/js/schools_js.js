/**
 * @file: schools_js.js
 * @description: Javascript code for 'schools.php'
 */


/**
 * Upon loading 'schools.php', this code block prints all the school
 * cards for the page.
*/
window.onload = function() {
    let schools = {
        SBE: ['#117042', 'sbe_shirt.jpg'],
        SAFAD: ['#8D1313', 'safad_tote.jpg'],
        SAS: ['#121269', 'maje_drag.jpg'],
        SHCP: ['#791679', 'shcp_healthcare.jpg'],
        SOE: ['#D6C850', 'engwave_tee.jpg'],
        SLG: ['#D9D9D9', 'slg_jersey.jpg'],
        SOED: ['#9393EC', 'soed_shirt.jpg']
    };
    for (let school in schools) {
        print_school(schools[school][0], schools[school][1] ,school);
    }
    
};


// Function for printing a school card
function print_school(color, image_bg, school) {
    let schools_pages = document.getElementById('schools-pg');
    let text = `
        <div class="card" style="border-color: ${color} !important; cursor: pointer;" onclick="window.location.href='?school=${school}';">
            <div class="card-body">
                <div class="background" style="background-image: url('images/school_preview/${image_bg}');"></div>
                <div class="text">${school}</div>
            </div>
        </div>`;
    schools_pages.innerHTML += text;
}
