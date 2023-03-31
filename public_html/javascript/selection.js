function displayHero(id) {

    if(id == 1){
        document.getElementById("Garfield").style.display = "block";
        document.getElementById("Odie").style.display = "none";
        document.getElementById("Nermal").style.display = "none";
    }

    if(id == 2){
        document.getElementById("Garfield").style.display = "none";
        document.getElementById("Odie").style.display = "block";
        document.getElementById("Nermal").style.display = "none";
    }

    if(id == 3){
        document.getElementById("Garfield").style.display = "none";
        document.getElementById("Odie").style.display = "none";
        document.getElementById("Nermal").style.display = "block";
    }
}