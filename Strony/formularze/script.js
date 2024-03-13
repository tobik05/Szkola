function zadanie1(){
    var wynik = document.getElementById("wynik");  
    var tekst = DANE.tekst.value;
    var czcionka = DANE.czcionka.value;
    var rozmiar = DANE.rozmiar.value;
    var gruboscgora = DANE.gruboscgora.value;
    var gruboscdol = DANE.gruboscdol.value;
    var grubosclewo = DANE.grubosclewo.value;
    var gruboscprawo = DANE.gruboscprawo.value;
    var kolorgora=DANE.kolorgora.value;
    var kolordol=DANE.kolordol.value;
    var kolorlewo=DANE.kolorlewo.value;
    var kolorprawo=DANE.kolorprawo.value;
    var stylgora=DANE.stylgora.value;
    var styldol=DANE.styldol.value;
    var styllewo=DANE.styllewo.value;
    var stylprawo=DANE.stylprawo.value;
    var wypelnienie=DANE.wypelnienie.value;
    var kolorczcionki=DANE.kolorczcionki.value;

    var pochylona = document.getElementById("pochylona");
    var przekreslona = document.getElementById("przekreslona");
    var podkreslona = document.getElementById("podkreslona");
    var pogrubiona = document.getElementById("pogrubiona");
    pochylona.checked==false, przekreslona.checked==false, podkreslona.checked==false, pogrubiona.checked==false;

    wynik.innerHTML=tekst;
    document.getElementById("wynik").style.fontFamily=czcionka;
    document.getElementById("wynik").style.fontSize=rozmiar;
    document.getElementById("wynik").style.borderTop=gruboscgora+" "+stylgora+" "+kolorgora;
    document.getElementById("wynik").style.borderBottom=gruboscdol+" "+styldol+" "+kolordol;
    document.getElementById("wynik").style.borderLeft=grubosclewo+" "+styllewo+" "+kolorlewo;
    document.getElementById("wynik").style.borderRight=gruboscprawo+" "+stylprawo+" "+kolorprawo;
    document.getElementById("wynik").style.backgroundColor=wypelnienie;
    document.getElementById("wynik").style.color=kolorczcionki;
    document.getElementById("wynik").style.textDecoration="none";
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

}