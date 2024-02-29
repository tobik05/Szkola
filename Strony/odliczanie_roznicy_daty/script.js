function roznica(){
    var wynik = document.getElementById("wynik");
    var data_urodzenia = new Date(document.getElementById("data_urodzenia").value);
    var dzis = new Date();

    var wiek_w_milisekundach = dzis-data_urodzenia;
    var wiek_w_sekundach = wiek_w_milisekundach/1000;
    var wiek_w_minutach = wiek_w_sekundach/60;
    var wiek_w_godzinach = wiek_w_minutach/60;
    var wiek_w_dniach = wiek_w_godzinach/24;
    var lata = Math.floor(wiek_w_dniach/365);
    var miesiace = Math.floor((wiek_w_dniach%365)/30);
    var dni = Math.floor(wiek_w_dniach %365 %30);

    wynik.innerHTML = "Lat:"+lata+" Miesięcy: "+miesiace+" Dni: "+dni;
}
function odliczaniewieku(){
    var wynik2 = document.getElementById("wynik2");
    var dzis = new Date();
    var wiek = new Date('January 1, 2000, 00:00:00 GMT');

    var roznica = dzis-wiek;
    var dni = Math.floor(roznica / (1000*60*60*24));
    var godzin = Math.floor((roznica % (1000*60*60*24)) / (1000*60*60));
    var minut = Math.floor((roznica % (1000*60*60)) / (1000*60));
    var sekund = Math.floor((roznica % (1000*60)) / 1000);
    wynik2.innerHTML = "Liczba dni: "+dni+" Liczba godzin: "+godzin+" Liczba minut: "+minut+" Liczba sekund: "+sekund;
    setTimeout("odliczaniewieku()",1000);
}

function odliczaniekoniecrokuszkolnego(){
    var wynik3 = document.getElementById("wynik3");
    var dzis = new Date();
    var wiek = new Date('June 21, 2024, 09:00:00 GMT');

    var roznica = wiek-dzis;
    var dni = Math.floor(roznica / (1000*60*60*24));
    var godzin = Math.floor((roznica % (1000*60*60*24)) / (1000*60*60));
    var minut = Math.floor((roznica % (1000*60*60)) / (1000*60));
    var sekund = Math.floor((roznica % (1000*60)) / 1000);
    wynik3.innerHTML = "Liczba dni: "+dni+" Liczba godzin: "+godzin+" Liczba minut: "+minut+" Liczba sekund: "+sekund;
    setTimeout("odliczaniekoniecrokuszkolnego()",1000);
}
function odliczaniekonieclekcji(){
    var wynik4 = document.getElementById("wynik4");
    var lekcje = document.getElementById("lekcje").value;

    var dzis = new Date();
    var wiek = new Date();
    if(lekcje == 6){
        wiek.setHours("13");
        wiek.setMinutes("20");
    } else if(lekcje == 7){
        wiek.setHours("14");
        wiek.setMinutes("15");
    } else if(lekcje == 8){
        wiek.setHours("15");
        wiek.setMinutes("10");
    } else if(lekcje == 9){
        wiek.setHours("16");
        wiek.setMinutes("00");
    } else{
        wiek.setHours("00");
        wiek.setMinutes("00");
    }

    var roznica = wiek-dzis;
    var godzin = Math.floor((roznica % (1000*60*60*24)) / (1000*60*60));
    var minut = Math.floor((roznica % (1000*60*60)) / (1000*60));
    var sekund = Math.floor((roznica % (1000*60)) / 1000);
    wynik4.innerHTML = "Liczba godzin: "+godzin+" Liczba minut: "+minut+" Liczba sekund: "+sekund;
    setTimeout("odliczaniekonieclekcji()",1000);
}