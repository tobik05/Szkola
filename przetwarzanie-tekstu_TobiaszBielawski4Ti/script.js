function dane(){
    var wynik = document.getElementById("wynik");
    var tekst = document.getElementById("tekst").value;
    var tekst2 = document.getElementById("tekst").value;
    var litera = document.getElementById("litera").value;
    var wyraz = document.getElementById("wyraz").value;
    var wyraz1 = document.getElementById("wyraz1").value;
    var wyraz2 = document.getElementById("wyraz2").value;
    var odnr=parseInt(document.getElementById("od").value);
	var donr=parseInt(document.getElementById("do").value);
    console.log("dane wczytano");
}
function dlugosctekstu(){
    wynik.innerHTML="<div class='wynik-1'>Długość tekstu ma: "+tekst.length+" znaków.</div>";

    wynik.innerHTML+="<br>Tekst z odstępem co literę:<br>";
    wynik.innerHTML+="<div class='wynik-1'>";
    for(var i=0; i<tekst.length; i++){
        if(tekst[i]=" "){
            wynik.innerHTML+=tekst[i]+"&nbsp;";
        } else{
            wynik.innerHTML+=tekst[i]+" ";
        }
    }
    wynik.innerHTML+="</div>";

    wynik.innerHTML+="<br>Tekst z odstępem co literę wspak:<br>";
    wynik.innerHTML+="<div class='wynik-1'>";
    for(var i=tekst.length-1; i>=0; i--){
        if(tekst[i]=" "){
            wynik.innerHTML+=tekst[i]+"&nbsp;";
        } else{
            wynik.innerHTML+=tekst[i]+" ";
        }
    }
    wynik.innerHTML+="</div>";

    wynik.innerHTML+="<br>Tekst z dużych liter:<br>";
    wynik.innerHTML+="<div class='wynik-1'>"+tekst.toUpperCase();+"</div>"
    wynik.innerHTML+="<br>Tekst z małych liter:<br>";
    wynik.innerHTML+="<div class='wynik-1'>"+tekst.toLowerCase();+"</div>"

    wynik.innerHTML+="<br>Czy dana litera występuje w tekście:<br>";
    var wystepujelitera=false;
    var ilewystepujelitera=0;
    for(var i=0; i<tekst.length; i++){
        if(tekst[i]==litera){
            wystepujelitera=true;
            ilewystepujelitera++;
        }
    }
    if(wystepujelitera=true){
        wynik.innerHTML+="<div class='wynik-1'>Litera "+litera.toUpperCase()+" występuje "+ilewystepujelitera+" razy.</div>";
    } else{
        wynik.innerHTML+="<div class='wynik-1'>Litera "+litera.toUpperCase()+" nie występuje</div>";
    }

    wynik.innerHTML+="<br>Czy dany wyraz występuje w tekście:<br>";
    var wyrazy = tekst.split(" ");
    var wystepujewyraz=false;
    var ilewystepujewyraz=0;
    for(var i=0; i<tekst.length; i++){
        if(wyrazy[i]==wyraz){
            wystepujewyraz=true;
            ilewystepujewyraz++;
        }
    }
    if(wystepujewyraz=true){
        wynik.innerHTML+="<div class='wynik-1'>Wyraz '"+wyraz+"' występuje "+ilewystepujewyraz+" razy.</div>";
    } else{
        wynik.innerHTML+="<div class='wynik-1'>Wyraz '"+wyraz+"' nie występuje</div>";
    }

    wynik.innerHTML+="<br>Czy tekst ma cyfry:<br>";
    var licznik = 0;
    for(var i=0; i<tekst.length; i++){
        if(tekst[i]>='0' & tekst[i]<='9'){
            licznik++;
        }
    }
    if(licznik>0){
        wynik.innerHTML+="<div class='wynik-1'>W tekście wysępuje "+licznik+" cyfr.</div>";
    } else{
        wynik.innerHTML+="<div class='wynik-1'>W tekście nie występują cyfry.</div>";
    }

    wynik.innerHTML+="<br>Czy dany wyraz występuje w tekście:<br>";
    var wyrazy = tekst.split(" ");
    var wystepujewyraz=false;
    var ilewystepujewyraz=0;
    for(var i=0; i<tekst.length; i++){
        if(wyrazy[i]==wyraz){
            wystepujewyraz=true;
            ilewystepujewyraz++;
        }
    }
    if(wystepujewyraz=true){
        wynik.innerHTML+="<div class='wynik-1'>Wyraz '"+wyraz+"' występuje "+ilewystepujewyraz+" razy.</div>";
    } else{
        wynik.innerHTML+="<div class='wynik-1'>Wyraz '"+wyraz+"' nie występuje</div>";
    }

    wynik.innerHTML+="<br>Tekst z zamienionym wyrazem "+wyraz1+" na "+wyraz2+"<br>";
    var tekst2 = tekst.replaceAll(wyraz1,wyraz2);
    wynik.innerHTML+="<div class='wynik-1'>"+tekst2+"</div>";

    odnr--;
    var t2=tekst.substring(odnr,donr);
    wynik.innerHTML+="<div class='wynik-1'>Z tekstu: "+tekst+"</i> wycicięto od znaku: "+odnr+" do znaku "+donr+" otrzymano tekst <i> "+t2+"</i></div>";
}
function zadaniejeden(){
    dane();
    if(tekst.length>tekst2.length){
        wynik.innerHTML+="<div class='wynik-1'> Tekst 1 jest dłuższy.";
    } else{
        wynik.innerHTML+="<div class='wynik-1'> Tekst 1 jest dłuższy.";
    }
}

function zadaniedwa(){
    dane();
    
    for(var i=tekst.length-1; i>=0; i--){
        tekstwspak[i]+=tekst[i];
        console.log(tekst[i]+", "+tekstwspak);
    }
}


