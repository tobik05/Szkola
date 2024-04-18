function losuj(){
    var liczby = new Array(6);
    liczby[0] = document.getElementById("l1").value;
    liczby[1] = document.getElementById("l2").value;
    liczby[2] = document.getElementById("l3").value;
    liczby[3] = document.getElementById("l4").value;
    liczby[4] = document.getElementById("l5").value;
    liczby[5] = document.getElementById("l6").value;
    var wynik = document.getElementById("wynik");
    
    //drukowanie liczb
    wynik.innerHTML="Twoje liczby, to: ";
    for(var i=0; i<=5; i++){
        wynik.innerHTML+=liczby[i]+" | ";
    }

    //sprawdzanie czy liczby sie powtarzaja
    const bezpowtorki= new Set(liczby);
    if(bezpowtorki.size === liczby.length){
        powtorka2=false;
    } else powtorka2=true;

    //jesli sie nie powtarzaja to losuje liczby
    if(powtorka2==false){
        //generuje liczby
        var losowanie = new Array(6);
        for(var i=0; i<=5; i++){
            var powtorka=true;
            while(powtorka){
                losowanie[i]=Math.floor(1+Math.random()*49);
                var powtorka=false;
                for(var k=0; k<=i-1; k++){
                    if(losowanie[i]==losowanie[k]){
                        powtorka=true;
                    }
                }
            }
        }
        wynik.innerHTML+="<br> Wylosowane liczby: ";
        //wyswietla wygenerowane liczby
        for(var i=0; i<=5; i++){
            wynik.innerHTML+=losowanie[i]+"   ";
        }
        //sprawdza ile liczb trafiles
        var iletrafien=0;
        for(var k=0; k<=5; k++){
            for(var i=0; i<=5; i++){
                if(losowanie[i]==liczby[k]){
                    iletrafien++;
                }
            }
        }
        wynik.innerHTML+=" Trafiłeś: "+iletrafien+" liczb.";
    } else if(powtorka2==true){
        wynik.innerHTML="Liczby sie powtarzaja ";
    }
}