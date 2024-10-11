function zadanie1(){
    var wynik=document.getElementById("wynik");
    wynik.innerHTML="";
    var dzis=new Date();
    var rok=dzis.getFullYear();
    var miesiac=dzis.getMonth();
    var dzien=dzis.getDate();
    var dzientyg=dzis.getDay();
    var godzina = dzis.getHours();
    var minuta = dzis.getMinutes();
    var sekunda = dzis.getSeconds();
    var milisekunda = dzis.getMilliseconds();
    if(dzien<10){dzien="0"+dzien;}
    if(miesiac<10){miesiac="0"+miesiac;}
    if(godzina<10){godzina="0"+godzina;}
    if(minuta<10){minuta="0"+minuta;}
    if(sekunda<10){sekunda="0"+sekunda;}
    if(milisekunda<10){milisekunda="00"+milisekunda;}
    if(milisekunda<100){milisekunda="0"+milisekunda;}
    var nazwydni = ["Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota", "Niedziela"];
    wynik.innerHTML+="Dzisiaj mamy: "+rok+", "+miesiac+", "+dzien+", "+nazwydni[dzientyg-1]+"<br>";
    wynik.innerHTML+="Czas: "+godzina+":"+minuta+":"+sekunda+":"+milisekunda;
    setTimeout("zadanie1()",1)
}
function oblicz(){
    var wydarzenie = new Date(document.getElementById("wydarzenie").value);
    var wynik=document.getElementById("wynik");
    var dzis = new Date();
    var roznica = wydarzenie-dzis;
    roznica=Math.ceil(roznica/(1000*60*60*24));
    wynik.innerHTML="";
    wynik.innerHTML="Pozostalo: "+roznica;
}
function koniecroku(){
    var wynik=document.getElementById("wynik");
    wynik.innerHTML="";
    var teraz = new Date();
    var koniecroku=new Date();
    koniecroku.setDate(21);
    koniecroku.setMonth(5);
    koniecroku.setFullYear(2024);
    koniecroku.setHours(9);
    koniecroku.setMinutes(0);
    koniecroku.setSeconds(0);
    var roznica = (koniecroku-teraz)/1000;
    var godziny = Math.floor(roznica/3600);
    var minuty=Math.floor((roznica-godziny*3600)/60)
    var sekundy=Math.floor((roznica-godziny*3600-minuty*60));
    wynik.innerHTML="Pozostalo: "+roznicamiesiac+" Miesięcy, "+roznicadni+" Dni, "+roznicagodzin+" Godzin, "+roznicaminut+" Minut, "+roznicasekund+" Sekund";
    setTimeout("koniecroku()",1);
}
function konieclekcji(){
    var wynik=document.getElementById("wynik");
    var teraz = new Date();
    var koniec = new Date();
    var konieclekcji = document.getElementById("czas").value;
    var godzina = konieclekcji[0]+konieclekcji[1];
    var minuta = konieclekcji[3]+konieclekcji[4];
    koniec.setHours(godzina);
    koniec.setMinutes(minuta);
    koniec.setSeconds(0);
    var roznica = (koniec-teraz)/1000;
    var godziny = Math.floor(roznica/3600);
    var minuty=Math.floor((roznica-godziny*3600)/60);
    var sekundy=Math.floor((roznica-godziny*3600-minuty*60));
    wynik.innerHTML="Pozostalo: "+godziny+" Godzin, "+minuty+" Minut "+sekundy+" Sekund";
    setTimeout("konieclekcji()",1);
}
var start;
var stoper_dziala=false
function stoper(){
    if(stoper_dziala){
    var wynik=document.getElementById("wynik");
    var teraz = new Date();
    var roznica = (teraz-start)/1000;
    var godziny = Math.floor(roznica/3600);
    var minuty=Math.floor((roznica-godziny*3600)/60);
    var sekundy=Math.floor((roznica-godziny*3600-minuty*60));
    wynik.innerHTML=godziny+":"+minuty+":"+sekundy+":";
    setTimeout("stoper()",1);
    }
}
function start(){
    start=new Date();
    stoper_dziala=true;
    stoper();
}
function stop(){
    stoper_dziala=false;
}