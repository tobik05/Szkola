function spr(){
    var wynik=document.getElementById("wynik");
    var imie = document.getElementById("imie").value;
    var nazwisko = document.getElementById("nazwisko").value;
    var klasa = document.getElementById("klasa").value;
    var pesel = document.getElementById("pesel").value;
    var nrdowodu = document.getElementById("nrdowodu").value;
    var nip = document.getElementById("nip").value;
    var wzrost = document.getElementById("wzrost").value;
    var adres = document.getElementById("adres").value;
    var mail = document.getElementById("mail").value;
    var www = document.getElementById("www").value;
	console.log("Wczytano dane");
    wynik.innerHTML="";
    //zadanie 1
    var wzorzec_imieinazwisko=/^[A-ZĄĘŚĆŹŻŁÓ]{1}[a-ząęśćżźłó]{1,}$/;
    if(wzorzec_imieinazwisko.test(imie)){
        wynik.innerHTML+="<div class='dobre'>Imię poprawne.</div>";
    } else{
        wynik.innerHTML+="<div class='error'>Imię nie jest poprawne.</div>";
    }
    //zadanie 2
    if(wzorzec_imieinazwisko.test(nazwisko)){
        wynik.innerHTML+="<div class='dobre'>Nazwisko poprawne.</div>";
    } else{
        wynik.innerHTML+="<div class='error'>Nazwisko nie jest poprawne.</div>";
    }
    //zadanie 3
    var wzorzec_klasa=/^[1-5][A-Z]{1}[a-z]{1}$/;
    if(wzorzec_klasa.test(klasa)){
        wynik.innerHTML+="<div class='dobre'>Klasa poprawna.</div>";
    } else{
        wynik.innerHTML+="<div class='error'>Klasa nie jest poprawna.</div>";
    }
    //zadanie 4
    var wzorzec_pesel=/^[0-9]{11}$/;
    if(wzorzec_pesel.test(pesel)){
        wynik.innerHTML+="<div class='dobre'>PESEL poprawny.</div>";
    } else{
        wynik.innerHTML+="<div class='error'>PESEL nie jest poprawny.</div>";
    }
    //zadanie 5
    var wzorzec_nrdowodu=/^[A-Z]{3}\ [0-9]{6}$/;
    if(wzorzec_nrdowodu.test(nrdowodu)){
        wynik.innerHTML+="<div class='dobre'>Nr dowodu poprawny.</div>";
    } else{
        wynik.innerHTML+="<div class='error'>Nr dowodu nie jest poprawny.</div>";
    }
    //zadanie 6
    var wzorzec_nip=/^[0-9]{3}\-[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/;
    if(wzorzec_nip.test(nip)){
        wynik.innerHTML+="<div class='dobre'>NIP poprawny.</div>";
    } else{
        wynik.innerHTML+="<div class='error'>NIP nie jest poprawny.</div>";
    }
    //zadanie 7
    var wzorzec_wzrost=/^(wysoki|średni|niski)$/;
    if(wzorzec_wzrost.test(wzrost)){
        wynik.innerHTML+="<div class='dobre'>Wzrost poprawny.</div>";
    } else{
        wynik.innerHTML+="<div class='error'>Wzrost jest poprawny.</div>";
    }
    //zadanie 8
    var wzorzec_adres=/^[A-ZĄĘŚĆŹŻŁÓ, a-ząęśćżźłó, 0-9,\ ,\,\.\-]$/;
    if(wzorzec_adres.test(adres)){
        wynik.innerHTML+="<div class='dobre'>Adres poprawny.</div>";
    } else{
        wynik.innerHTML+="<div class='error'>Adres jest poprawny.</div>";
    }
    //zadanie 9
    var wzorzec_mail=/^[a-z]{1,}[@]{1}[a-z]{1,}\.[a-z]{2,}$/;
    if(wzorzec_mail.test(mail)){
        wynik.innerHTML+="<div class='dobre'>E-MAIL poprawny.</div>";
    } else{
        wynik.innerHTML+="<div class='error'>E-MAIL jest poprawny.</div>";
    }
    //zadanie 10
    var wzorzec_www=/^http:\/\/www\.[a-z]{2,}\.[a-z]{2,}$/;
    if(wzorzec_www.test(www)){
        wynik.innerHTML+="<div class='dobre'>WWW poprawne.</div>";
    } else{
        wynik.innerHTML+="<div class='error'>WWW jest poprawny.</div>";
    }
}