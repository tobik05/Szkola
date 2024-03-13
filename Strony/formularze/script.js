function zadanie1(){
    var wynik = document.getElementById("wynik");  
    var tekst = DANE.tekst.value;
    var czcionka = DANE.czcionka.value;
    var rozmiar = DANE.rozmiar.value;
    var grubosc = DANE.grubosc.value;
    var kolor=DANE.kolor.value;
    var pochylona = document.getElementById("pochylona");
    var przekreslona = document.getElementById("przekreslona");
    var podkreslona = document.getElementById("podkreslona");
    var pogrubiona = document.getElementById("pogrubiona");
    pochylona.checked==false, przekreslona.checked==false, podkreslona.checked==false, pogrubiona.checked==false;

    wynik.innerHTML=tekst;
    document.getElementById("wynik").style.fontFamily=czcionka;
    document.getElementById("wynik").style.fontSize=rozmiar;
    document.getElementById("wynik").style.border=grubosc+" solid";
    if(pochylona.checked==true){
        document.getElementById("wynik").style.fontStyle="oblique";
    } 
    if(przekreslona.checked==true){
        document.getElementById("wynik").style.textDecoration="line-through";
    } 
    if(podkreslona.checked==true){
        document.getElementById("wynik").style.textDecoration="underline";
    } 
    if(pogrubiona.checked==true){
        document.getElementById("wynik").style.fontWeight="600";
    } else document.getElementById("wynik").style.fontWeight="400";

    document.getElementById("wynik").style.borderColor=kolor;
}