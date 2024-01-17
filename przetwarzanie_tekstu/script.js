function dane(){
    var wynik = document.getElementById("wynik");
    var tekst = document.getElementById("tekst").value;
    tekst = tekst.toString();
    var tekst2 = document.getElementById("tekst2").value;
    tekst2 = tekst2.toString();
    var litera = document.getElementById("litera").value;
    litera = litera.toString();
    var wyraz = document.getElementById("wyraz").value;
    var wyraz1 = document.getElementById("wyraz1").value;
    var wyraz2 = document.getElementById("wyraz2").value;
    var odnr=parseInt(document.getElementById("od").value);
	var donr=parseInt(document.getElementById("do").value);
    console.log("dane wczytano");
    wynik.innerHTML="";
}

function zadanie1(){
    dane();
    if(tekst.length==tekst2.length){
        wynik.innerHTML+="<div class='wynik-1'> Teksty są równej długości</div>";
    } else if(tekst.length>tekst2.length){
        wynik.innerHTML+="<div class='wynik-1'> Tekst 1 jest dłuższy.</div>";
    } else {
        wynik.innerHTML+="<div class='wynik-1'> Tekst 2 jest dłuższy.</div>";
    }
}

function zadanie2(){
    dane();
    var tekstwspak = tekst.split("").reverse().join("");
    if(tekst==tekstwspak){
        wynik.innerHTML+="<div class='wynik-1'> Tekst jest palindromem</div>";
    } else{
        wynik.innerHTML+="<div class='wynik-1'> Tekst nie jest palindromem</div>";
    }
}

function zadanie3(){
    dane();
    if(tekst.includes(tekst2)){
        wynik.innerHTML+="<div class='wynik-1'> Tekst nr 1 zaweira tekst nr 2</div>";
    } else if(tekst2.includes(tekst)){
        wynik.innerHTML+="<div class='wynik-1'> Tekst nr 2 zaweira tekst nr 1</div>";
    } else{
        wynik.innerHTML+="<div class='wynik-1'> Teksty się nie zawierają</div>";
    }
}

function zadanie4(){
    dane();
    var samogłoski = /[aeiou]/g;
    var liczbasamosglosek1 = tekst.match(samogłoski).length;
    var liczbasamosglosek2 = tekst2.match(samogłoski).length;
    if(liczbasamosglosek1==liczbasamosglosek2){
        wynik.innerHTML+="<div class='wynik-1'> Teksty mają tyle samo samogłosek</div>";
    } else if(liczbasamosglosek1>liczbasamosglosek2){
        wynik.innerHTML+="<div class='wynik-1'> Tekst nr 1 ma więcej samogłosek</div>";
    } else{
        wynik.innerHTML+="<div class='wynik-1'> Tekst nr 2 ma więcej samogłosek</div>";
    }
}  

function zadanie5(){
    dane();
    var cyfry = /[0-9]/g;
    var liczbacyfr1 = tekst.match(cyfry).length;
    var liczbacyfr2 = tekst2.match(cyfry).length;
    if(liczbacyfr1==liczbacyfr2){
        wynik.innerHTML+="<div class='wynik-1'> Teksty maja tyle samo cyfr</div>";
    } else if(liczbacyfr1>liczbacyfr2){
        wynik.innerHTML+="<div class='wynik-1'> Tekst nr 1 ma wiecej cyfr</div>";
    } else{
        wynik.innerHTML+="<div class='wynik-1'> Tekst nr 2 ma więcej cyfr</div>";
    }
}

function zadanie6(){
    dane();
    var duzelitery = /[A-Z]/g;
    var liczbaduzychliter1 = tekst.match(duzelitery).length;
    var liczbaduzychliter2 = tekst2.match(duzelitery).length;
    if(liczbaduzychliter1==liczbaduzychliter2){
        wynik.innerHTML+="<div class='wynik-1'> Teksty maja tyle samo duzych liter</div>";
    } else if(liczbaduzychliter1>liczbaduzychliter2){
        wynik.innerHTML+="<div class='wynik-1'> Tekst nr 1 ma wiecej duzych liter</div>";
    } else{
        wynik.innerHTML+="<div class='wynik-1'> Tekst nr 2 ma wiecej duzych liter</div>";
    }
}

function zadanie7(){
    dane();
    var malelitery = /[a-z]/g;
    var liczbamalychliter1 = tekst.match(malelitery).length;
    var liczbamalychliter2 = tekst2.match(malelitery).length;
    if(liczbamalychliter1==liczbamalychliter2){
        wynik.innerHTML+="<div class='wynik-1'> Teksty maja tyle samo malych liter</div>";
    } else if(liczbamalychliter1>liczbamalychliter2){
        wynik.innerHTML+="<div class='wynik-1'> Tekst nr 2 ma wiecej malych liter</div>";
    } else {
        wynik.innerHTML+="<div class='wynik-1'> Tekst nr 2 ma wiecej malych liter</div>";
    }
}

function zadanie8(){
    dane();
    var tekstgoto = tekst.replaceAll(wyraz1, wyraz2);
    var tekstgoto2 = tekst2.replaceAll(wyraz1, wyraz2);
    wynik.innerHTML+="<div class='wynik-1'>Tekst z zamienionym wyrazem: "+wyraz1+" na wyraz: "+wyraz2+" to: <br>"+tekstgoto+"<br><div>"
    wynik.innerHTML+="<div class='wynik-1'>Tekst z zamienionym wyrazem: "+wyraz1+" na wyraz: "+wyraz2+" to: <br>"+tekstgoto2+"<br><div>"
}  

function zadanie9(){
    dane();
    var tekst1warunek = false;
    var tekst2warunek = false;

    if(tekst[0].toUpperCase()===tekst[0] && tekst[tekst.length-1]==='.'){
        tekst1warunek=true;
    } else{
        tekst1warunek=false;
    }
    if(tekst2[0].toUpperCase()===tekst2[0] && tekst2[tekst2.length-1]==='.'){
        tekst1warunek=true;
    } else{
        tekst1warunek=false;
    }
    if(tekst1warunek==true & tekst2warunek==true){
        wynik.innerHTML="<div class='wynik-1'> Oba teksty spełniają warunki</div>";
    } else if(tekst1warunek==true & tekst2warunek==false){
        wynik.innerHTML="<div class='wynik-1'> Tylko tekst nr 1 spełnia warunek.</div>";
    } else if(tekst1warunek==false & tekst2warunek==true){
        wynik.innerHTML="<div class='wynik-1'> Tylko tekst nr 2 spełnia warunek.</div>";
    } else {
        wynik.innerHTML="<div class='wynik-1'> Żaden tekst nie spełnia warunków.</div>";
    }
}

function zadanie10(){
    dane();
    var tekst1warunek = false;
    var tekst2warunek = false;
    var hasło = tekst;
    var hasło2 = tekst2;
    if(hasło.length>=8 && /[A-Z]/.test(hasło) && /[a-z]/.test(hasło) && /[0-9]/.test(hasło) && /[!@#$%^&*()_+-=]/.test(hasło)){
        tekst1warunek=true;
    } else{
        tekst1warunek=false;
    }
    if(hasło2.length>=8 && /[A-Z]/.test(hasło2) && /[a-z]/.test(hasło2) && /[0-9]/.test(hasło2) && /[!@#$%^&*()_+-=]/.test(hasło2)){
        tekst2warunek=true;
    } else{
        tekst2warunek=false;
    }

    if(tekst1warunek==true & tekst2warunek==true){
        wynik.innerHTML="<div class='wynik-1'> Oba teksty spełniają warunki dobretgo hasła</div>";
    } else if(tekst1warunek==true & tekst2warunek==false){
        wynik.innerHTML="<div class='wynik-1'> Tylko tekst nr 1 spełnia warunek dobrego hasła</div>";
    } else if(tekst1warunek==false & tekst2warunek==true){
        wynik.innerHTML="<div class='wynik-1'> Tylko tekst nr 2 spełnia warunek dobrego hasła</div>";
    } else {
        wynik.innerHTML="<div class='wynik-1'> Żaden tekst nie spełnia warunków dobretgo hasła</div>";
    }
}
