document.querySelector("#location").addEventListener("input", updateSelect);
document.querySelector("#location").addEventListener("keyup", filterLocations);


function filterLocations() {
    let input = document.querySelector("location").value.toUpperCase();
    let select = document.querySelector("#location-select");
    let options = select.options;

    for (let i = 0; i < options.length; i++) {
        if (options[i].text.toUpperCase().indexOf(input) > -1) {
        options[i].style.display = "";
        } else {
        options[i].style.display = "none";
        }
    }
}

function updateSelect() {
    let input = document.querySelector("#location").value;
    let select = document.querySelector("#location-select");
    let options = select.options;

    options.forEach(function(option) {
        if (option.text === input) {
        option.selected = true;
        } else {
        option.selected = false;
        }
    });
}