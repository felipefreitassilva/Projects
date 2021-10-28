var bandeiras = document.getElementById("bandeiras")
var barracks = document.getElementById("barracks")
var culinaria = document.getElementById("culinaria")
var farroupsTalk = document.getElementById("farroupstalk")
var hideNshow = document.getElementById("hidenshow")
var languageChanging = document.getElementById("languagechanging")
var logos = document.getElementById("logos")
var mk = document.getElementById("mk")
var papelzinho = document.getElementById("papelzinho")
var facebook = document.getElementById("facebook")
var spotify = document.getElementById("spotify")
var titleShadowAnimated = document.getElementById("titleshadowanimated")
var meuOvo = document.getElementById("meuovo")


function openNav(id) {
    var x = document.getElementById(id);
    var more = document.getElementById("more"+id)
    var icon = document.getElementById("icon"+id)

    if (icon.innerHTML == "V") {
        icon.innerHTML = ">"
        more.style.display = "none"
    } else {
        icon.innerHTML = "V"
        more.style.display = "block"
    }
}