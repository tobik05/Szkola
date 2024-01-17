function zadanie(){
    var tablica1 = new Array(10);
    var tablica2 = new Array(10);

    tablica1[0] = parseFloat(document.getElementById("l1").value);
    tablica1[1] = parseFloat(document.getElementById("l2").value);
    tablica1[2] = parseFloat(document.getElementById("l3").value);
    tablica1[3] = parseFloat(document.getElementById("l4").value);
    tablica1[4] = parseFloat(document.getElementById("l5").value);
    tablica1[5] = parseFloat(document.getElementById("l6").value);
    tablica1[6] = parseFloat(document.getElementById("l7").value);
    tablica1[7] = parseFloat(document.getElementById("l8").value);
    tablica1[8] = parseFloat(document.getElementById("l9").value);
    tablica1[9] = parseFloat(document.getElementById("l10").value);
    tablica2[0] = parseFloat(document.getElementById("l11").value);
    tablica2[1] = parseFloat(document.getElementById("l12").value);
    tablica2[2] = parseFloat(document.getElementById("l13").value);
    tablica2[3] = parseFloat(document.getElementById("l14").value);
    tablica2[4] = parseFloat(document.getElementById("l15").value);
    tablica2[5] = parseFloat(document.getElementById("l16").value);
    tablica2[6] = parseFloat(document.getElementById("l17").value);
    tablica2[7] = parseFloat(document.getElementById("l18").value);
    tablica2[8] = parseFloat(document.getElementById("l19").value);
    tablica2[9] = parseFloat(document.getElementById("l20").value);
    var wynik = document.getElementById("wynik");
    wynik.innerHTML="";


    //zad 1
    var sredniat1=0;
    for(var i=0; i<10; i++){
        sredniat1+=tablica1[i];
    }
    sredniat1=sredniat1/10;

    var sredniat2=0;
    for(var i=0; i<10; i++){
        sredniat2+=tablica2[i];
    }
    sredniat2=sredniat2/10;
    wynik.innerHTML+="<br>Średnia pierwszej tablicy to: "+sredniat1+", a średnia drugiej to: "+sredniat2;

    //zad 2
    var max1=0;
    for(var i=0; i<10; i++){
        if(tablica1[i]>max1){
            max1=tablica1[i];
        }
    }
    var max2=0;
    for(var i=0; i<10; i++){
        if(tablica2[i]>max2){
            max2=tablica2[i];
        }
    }
    wynik.innerHTML+="<br>Największa liczba pierwszej tablicy to: "+max1+", a drugiej to: "+max2;

    //zad 3
    var min1=101;
    for(var i=0; i<10; i++){
        if(tablica1[i]<min1){
            min1=tablica1[i];
        }
    }
    var min2=101;
    for(var i=0; i<10; i++){
        if(tablica2[i]<min2){
            min2=tablica2[i];
        }
    }
    wynik.innerHTML+="<br>Najmniejsza liczba pierwszej tablicy to: "+min1+", a drugiej to: "+min2;

    //zad 4
    var ilep1=0;
    var ilenp1=0;
    for(var i=0; i<10; i++){
        if((tablica1[i]%2)==0){
            ilep1++;
        }else{
            ilenp1++
        }
    }
    var ilep2=0;
    var ilenp2=0;
    for(var i=0; i<10; i++){
        if((tablica2[i]%2)==0){
            ilep2++;
        }else{
            ilenp2++
        }
    }
    wynik.innerHTML+="<br>Parzystych pierwszej tablicy jest: "+ilep1+", nieparzystych: "+ilenp1+"<br>Parzystych drugiej tablicy jest: "+ilep2+", a nieparzystych: "+ilenp2;

    //zad 5
    var ilep=0;
    var ilenp=0;
    var ileroznych=0;
    for(var i=0; i<10; i++){
        if((tablica1[i]%2==0) & (tablica2[i]%2==0)){
            ilep++;
        }else if((tablica1[i]%2==1) & (tablica2[i]%2==1)){
            ilenp++;
        } else{
            ileroznych++;
        }
    }
    wynik.innerHTML+="<br>Parzystych par jest: "+ilep+", nieparzystych: "+ilenp+", a różynch: "+ileroznych;
}