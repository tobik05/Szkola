function licz(){
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    var info = document.getElementById("info");
    var wynik = document.getElementById("wynik");
    a=parseInt(a);
    b=parseInt(b);
    var suma =0;
    

    if(a==""){
        info.innerHTML = "Wprowadź A";
    } else if(a<=0){
        info.innerHTML = "A nie może być ujemna!.";
    } else if (isNaN(a)) {
        info.innerHTML = "A, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(b==""){
        info.innerHTML = "Wprowadź B";
    } else if(b<=0){
        info.innerHTML = "B nie może być ujemna!.";
    } else if (isNaN(b)) {
        info.innerHTML = "B, którą wprowadziłeś/aś nie jest liczbą.";
    } else{
        for(var i=a; i<=b; i++ ){
            suma+=i;
        }
        wynik.innerHTML="Suma liczb z przedzialu: "+a+", "+b+" wynosi: "+suma;
        wynik.innerHTML+="<br>";
        wynik.innerHTML+="Twoje liczby to: "
        for(var i=a; i<=b; i++ ){
            wynik.innerHTML+=" "+i;
        }
    }
}
function liczparzyste(){
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    var info = document.getElementById("info");
    var wynik = document.getElementById("wynik");
    a=parseInt(a);
    b=parseInt(b);
    var suma =0;
    

    if(a==""){
        info.innerHTML = "Wprowadź A";
    } else if(a<=0){
        info.innerHTML = "A nie może być ujemna!.";
    } else if (isNaN(a)) {
        info.innerHTML = "A, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(b==""){
        info.innerHTML = "Wprowadź B";
    } else if(b<=0){
        info.innerHTML = "B nie może być ujemna!.";
    } else if (isNaN(b)) {
        info.innerHTML = "B, którą wprowadziłeś/aś nie jest liczbą.";
    } else{
        for(var i=a; i<=b; i++ ){
            if(i%2==0){
                suma+=i;
            }
        }
        wynik.innerHTML="Suma liczb z przedzialu: "+a+", "+b+" wynosi: "+suma;
        wynik.innerHTML+="<br>";
        wynik.innerHTML+="Twoje liczby to: "
        wynik.style.color='green';
        for(var i=a; i<=b; i++ ){
            if(i%2==0){
                wynik.innerHTML+=" "+i;
            }
        }
    }
}
function licznieparzyste(){
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    var info = document.getElementById("info");
    var wynik = document.getElementById("wynik");
    a=parseInt(a);
    b=parseInt(b);
    var suma =0;
    

    if(a==""){
        info.innerHTML = "Wprowadź A";
    } else if(a<=0){
        info.innerHTML = "A nie może być ujemna!.";
    } else if (isNaN(a)) {
        info.innerHTML = "A, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(b==""){
        info.innerHTML = "Wprowadź B";
    } else if(b<=0){
        info.innerHTML = "B nie może być ujemna!.";
    } else if (isNaN(b)) {
        info.innerHTML = "B, którą wprowadziłeś/aś nie jest liczbą.";
    } else{
        for(var i=a; i<=b; i++ ){
            if(i%2!=0){
                suma+=i;
            }
        }
        wynik.innerHTML="Suma liczb z przedzialu: "+a+", "+b+" wynosi: "+suma;
        wynik.innerHTML+="<br>";
        wynik.innerHTML+="Twoje liczby to: "
        wynik.style.color='red';
        for(var i=a; i<=b; i++ ){
            if(i%2!=0){
                wynik.innerHTML+=" "+i;
            }
        }
    }
}
function dzielniki(){
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    var info = document.getElementById("info");
    var wynik = document.getElementById("wynik");
    a=parseInt(a);
    b=parseInt(b);
    var suma =0;
    

    if(a==""){
        info.innerHTML = "Wprowadź A";
    } else if(a<=0){
        info.innerHTML = "A nie może być ujemna!.";
    } else if (isNaN(a)) {
        info.innerHTML = "A, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(b==""){
        info.innerHTML = "Wprowadź B";
    } else if(b<=0){
        info.innerHTML = "B nie może być ujemna!.";
    } else if (isNaN(b)) {
        info.innerHTML = "B, którą wprowadziłeś/aś nie jest liczbą.";
    } else{
        var ilea=0;
        var ileb=0;
        wynik.innerHTML+="Dzielniki liczb: "+a+" wynosi: ";
        for(var i=1; i<=b; i++ ){
            if(a%i==0){
                wynik.innerHTML+=i+" ";
                ilea++;
            }
        }
        wynik.innerHTML+="<br>";
        wynik.innerHTML+="Dzielniki liczb: "+b+" wynosi: ";
        for(var i=1; i<=b; i++ ){
            if(b%i==0){
                wynik.innerHTML+=i+" ";
                ileb++;
            }
        }
        wynik.innerHTML+="<br>";
        wynik.innerHTML+="Liczba a ma dzielnikow: "+ilea+" a liczba b ma: "+ileb;
        wynik.innerHTML+="<br>";
        if(ilea==ileb){
            wynik.innerHTML+="Liczby maja tyle samo dzielnikow";
        } else if (ilea>ileb){
            wynik.innerHTML+="Liczba a ma więcej dzielników";
        } else {
            wynik.innerHTML+="Liczba b ma więcej dzielników";
        }
    }
}