function data(){
    var dzientygwynik = document.getElementById("dzien-tyg");
    var dzienwynik = document.getElementById("dzien");
    var miesiacwynik = document.getElementById("miesiac");
    var rokwynik = document.getElementById("rok");
    var godzinawynik = document.getElementById("godzina");
    var body = document.getElementById("body");
    var sekcja = document.getElementById("sekcja");
    var nazwydni = ["Niedziela","Poniedziałek","Wtorek","Środa","Czwartek","Piątek","Sobota"];
    var nazwymiesiaca = ["Styczeń","Luty","Marzec","Kwicień","Maj","Czerwiec","Lipiec","Sierpień","Wrzesień","Październik","Listopad","Grudzień"];
    var datadzis = new Date();

    var dzientyg = nazwydni[datadzis.getDay()];
    dzientygwynik.innerHTML = dzientyg;
    var dzien = datadzis.getDate(); 
    dzienwynik.innerHTML = dzien;
    var miesiac = nazwymiesiaca[datadzis.getMonth()]; 
    miesiacwynik.innerHTML = miesiac;
    var rok = datadzis.getFullYear(); 
    rokwynik.innerHTML = rok;
    var godzina = datadzis.getHours();
    if(godzina<10){
        godzina="0"+godzina;
    }
    var minuta = datadzis.getMinutes();
    if(minuta<10){
        minuta="0"+minuta;
    }
    var sekunda = datadzis.getSeconds();
    if(sekunda<10){
        sekunda="0"+sekunda;
    }
    var godzinacala = godzina+":"+minuta+":"+sekunda;
    godzinawynik.innerHTML = godzinacala;

    var dzientyg2 = datadzis.getDay();
    console.log(dzientyg2);
    if(dzientyg2 == 0){
        body.style="color: #d90429";
        sekcja.style="box-shadow: #081420 0px 0px 15px, inset 0px 0px 40px #d90429";
    } else if(dzientyg2 == 6){
        body.style="color: #8ac926";
        sekcja.style="box-shadow: #081420 0px 0px 15px,  inset 0px 0px 40px #8ac926";
    } else{
        body.style="color: #219ebc";
        sekcja.style="box-shadow: #081420 0px 0px 15px,  inset 0px 0px 40px #219ebc";
    }

    setTimeout("data()",1000);
}
