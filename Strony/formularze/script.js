function zadanie1(){
    var wynik = document.getElementById("wynik");  
    var tekst = DANE.tekst.value;
    var czcionka = DANE.czcionka.value;
    var rozmiar = DANE.rozmiar.value;

    var dekoracja_czcionki = "";
    var dekoracja = document.forms["DANE"]["dekoracja"];
    for (var i=0; i<dekoracja.length; i++) {
        if (dekoracja[i].checked) {
            dekoracja_czcionki[i] = dekoracja[i].value+" ";
        }
    }
    console.log(dekoracja_czcionki);
    kolor=DANE.kolor.value;
    wynik.innerHTML=tekst;
    document.getElementById("wynik").style.fontFamily=czcionka;
    document.getElementById("wynik").style.fontSize=rozmiar;
    if(dekoracja_czcionki[0]!=""){
        document.getElementById("wynik").style.fontStyle="oblique";
    } else if(dekoracja_czcionki[1]!=""){
        document.getElementById("wynik").style.textDecoration="line-through";
    } else if(dekoracja_czcionki[2]!=""){
        document.getElementById("wynik").style.textDecoration="underline";
    } else if(dekoracja_czcionki[3]!=""){
        document.getElementById("wynik").style.fontWeight="600";
    }
}