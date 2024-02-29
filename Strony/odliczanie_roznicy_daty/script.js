function roznica(){
    var wynik = document.getElementById("wynik");
    var start = new Date(document.getElementById("start_data").value);
    var koniec = new Date(document.getElementById("koniec_data").value);
    var roznica = koniec-start;
    wynik.innerHTML = "Liczba dni: "+Math.floor(roznica/(1000*60*60*24));
}
function roznica2(){
    var wynik2 = document.getElementById("wynik2");
    var start = new Date();
    var koniec = new Date();
    
    var start_godzina=document.getElementById("start_godzina").value;
    start.setHours(start_godzina[0]+start_godzina[1]);
    start.setMinutes(start_godzina[3]+start_godzina[4]);

    var koniec_godzina=document.getElementById("koniec_godzina").value;
    koniec.setHours(koniec_godzina[0]+koniec_godzina[1]);
    koniec.setMinutes(koniec_godzina[3]+koniec_godzina[4]);

    var roznica = koniec-start;
    roznica = roznica/1000;
    var godzin = Math.floor(roznica/(3600));
    roznica = roznica-godzin*3600;
    var minut = Math.floor(roznica/(60));
    wynik2.innerHTML = "Liczba godzin: "+godzin+" Liczba minut: "+minut;
}

function odliczanie(){
    var wynik3 = document.getElementById("wynik3");
    var koniec=new Date();
    var odliczanie_koniec = document.getElementById("koniec_odliczanie").value;
    koniec.setHours(odliczanie_koniec[0]+odliczanie_koniec[1]);  
    koniec.setMinutes(odliczanie_koniec[3]+odliczanie_koniec[4]);
    var start = new Date(); 

    var roznica=koniec-start;
    
    var godzin=Math.floor(roznica/(3600*1000));
    roznica=roznica-godzin*3600*1000;
    var minut=Math.floor(roznica/(60*1000));
    roznica=roznica-minut*60*1000;
    sekund=roznica/1000; 	  
    wynik3.innerHTML="Godzin: "+godzin+"  Minut: "+minut+" Sekundy: "+sekund;
    setTimeout("odliczanie()",1000);
}