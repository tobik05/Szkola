function nad(element){
    element.style.color="var(--zolty)";
    element.style.backgroundColor="var(--zielony)";
}
function poza(element){
    element.style.color="var(--bialy)";
    element.style.backgroundColor="var(--niebieski)";
}
function klik(){
    var autor = document.getElementById("autor");
    autor.style.scale="1.3";
}
function nieklik(){
    var autor = document.getElementById("autor");
    autor.style.scale="0.8";
}
function dblklik(){
    var autor = document.getElementById("autor");
    autor.style.scale="1.3";
}

function nadramka(element){
    element.style.border="4px solid var(--czerwony)";
}
function pozaramka(element){
    element.style.border="4px solid var(--alfa)";
}
function zwierze_klik(element){
    zwierze = element.alt;
    document.getElementById(zwierze + "_tekst").innerHTML = zwierze;
}
function dblkliktekst(element){
    zwierze = element.alt;
    document.getElementById(zwierze + "_tekst").style.color="#868686";
}
