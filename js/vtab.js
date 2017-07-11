    // Declare all variables
function openCity(evt, cityName) {
    var i, card, tablinks;
    // Get all elements with class="card" and hide them
    card = document.getElementsByClassName("card");
    for (i = 0; i < card.length; i++) {
        card[i].style.display = "none";
    }
     // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();