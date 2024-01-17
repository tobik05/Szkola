function zadanie(){
    var wynik = document.getElementById("wynik");
    var tekst = document.getElementById("tekst").value;
    var tekst2 = document.getElementById("tekst2").value;
    var litera = document.getElementById("litera").value;
    var wyraz = document.getElementById("wyraz").value;
    var wyraz1 = document.getElementById("wyraz1").value;
    var wyraz2 = document.getElementById("wyraz2").value;
    var odnr=parseInt(document.getElementById("od").value);
	var donr=parseInt(document.getElementById("do").value);
    console.log("dane wczytano");
    wynik.innerHTML="";

    //zadanie 1
    if(tekst.length==tekst2.length){
        wynik.innerHTML+="<div class='wynik-1'> Teksty są równej długości";
    } else if(tekst.length>tekst2.length){
        wynik.innerHTML+="<div class='wynik-1'> Tekst 1 jest dłuższy.";
    } else {
        wynik.innerHTML+="<div class='wynik-1'> Tekst 2 jest dłuższy.";
    }
    //zadanie 2
    wynik.innerHTML="<br>";
    var tekstwspak=new Array(tekst.length);
    for(var i=0; i>tekst.length; i++){
        tekstwspak[i]=tekst[i];
        console.log(tekst[i]+", "+tekstwspak[i]);
    }
    //zadanie 3
    var licznikt1 = 0;
    var licznikt2 = 0;
    for(var i=0; i<tekst.length; i++){
        if(tekst[i]>='0' & tekst[i]<='9'){
            licznikt1++;
        }
    }
    for(var i=0; i<tekst.length; i++){
        if(tekst[i]>='0' & tekst[i]<='9'){
            licznikt2++;
        }
    }
    if(licznikt1==licznikt2){
        wynik.innerHTML+="<div class='wynik-1'>Teksty majaą tyle samo cyfr</div>";
    } else if(licznikt1>licznikt2){
        wynik.innerHTML+="<div class='wynik-1'>W tekście nr 1 jest więcej cyfr</div>";
    } else{
        wynik.innerHTML+="<div class='wynik-1'>W tekście nr 2 jest więcej cyfr</div>";
    }
    //zad 4
    var licznikt1D = 0;
    var licznikt2D = 0;
    var licznikt1m = 0;
    var licznikt2m = 0;
    for(var i=0; i<tekst.length; i++){
        if(tekst[i]>='A' & tekst[i]<='Z'){
            licznikt1D++;
        } else licznikt1m++;
    }
    for(var i=0; i<tekst2.length; i++){
        if(tekst2[i]>='A' & tekst2[i]<='Z'){
            licznikt2D++;
        } else licznikt2m++;
    }
    if(licznikt1D==licznikt2D){
        wynik.innerHTML+="<div class='wynik-1'>Teksty majaą tyle samo duzych liter</div>";
    } else if(licznikt1D>licznikt2D){
        wynik.innerHTML+="<div class='wynik-1'>W tekście nr 1 jest więcej dużych liter</div>";
    } else{
        wynik.innerHTML+="<div class='wynik-1'>W tekście nr 2 jest więcej dużych liter</div>";
    }
    if(licznikt1m==licznikt2m){
        wynik.innerHTML+="<div class='wynik-1'>Teksty majaą tyle samo małych liter</div>";
    } else if(licznikt1m>licznikt2m){
        wynik.innerHTML+="<div class='wynik-1'>W tekście nr 1 jest więcej małych liter</div>";
    } else{
        wynik.innerHTML+="<div class='wynik-1'>W tekście nr 2 jest więcej małych liter</div>";
    }
}