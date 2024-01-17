function malowanie(){
    var szerokosc1 = parseFloat(document.getElementById("szerokosc1").value);
    var wysokosc1 = parseFloat(document.getElementById("wysokosc1").value);
    var szerokosc2 = parseFloat(document.getElementById("szerokosc2").value);
    var wysokosc2 = parseFloat(document.getElementById("wysokosc2").value);
    var szerokosc3 = parseFloat(document.getElementById("szerokosc3").value);
    var wysokosc3 = parseFloat(document.getElementById("wysokosc3").value);
    var sufit =parseFloat(document.getElementById("sufit").value);
    var sufit2 = parseFloat(document.getElementById("sufit2").value);
    var info = document.getElementById("info");
    var powierzchnia = document.getElementById("powierzchnia");
    var farba = document.getElementById("farba");
    powierzchnia.innerHTML="";
    farba.innerHTML="";
    powierzchnia.innerHTML="Twoja powierzchnia: ";
    farba.innerHTML="Potrzebna lość farby: ";

    if(szerokosc1==""){
        info.innerHTML = "Wprowadź szerokość ściany 1";
    } else if(szerokosc1<=0){
        info.innerHTML = "Szerokość ściany 1 nie może być ujemna!.";
    } else if (isNaN(szerokosc1)) {
        info.innerHTML = "Szerokość ściany 1, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(wysokosc1==""){
        info.innerHTML = "Wprowadź wysokość ściany 1";
    } else if(wysokosc1<=0){
        info.innerHTML = "Wysokość ściany 1 nie może być ujemna!.";
    } else if (isNaN(wysokosc1)) {
        info.innerHTML = "Wysokość ściany 1, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(szerokosc2==""){
        info.innerHTML = "Wprowadź szerokość ściany 2";
    } else if(szerokosc2<=0){
        info.innerHTML = "Szerokość ściany 2 nie może być ujemna!.";
    } else if (isNaN(szerokosc2)) {
        info.innerHTML = "Szerokość ściany 2, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(wysokosc2==""){
        info.innerHTML = "Wprowadź wysokość ściany 2";
    } else if(wysokosc2<=0){
        info.innerHTML = "Wysokość ściany 2 nie może być ujemna!.";
    } else if (isNaN(wysokosc2)) {
        info.innerHTML = "Wysokość ściany 2, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(szerokosc3==""){
        info.innerHTML = "Wprowadź szerokość ściany 3";
    } else if(szerokosc3<=0){
        info.innerHTML = "Szerokość ściany 3 nie może być ujemna!.";
    } else if (isNaN(szerokosc3)) {
        info.innerHTML = "Szerokość ściany 3, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(wysokosc3==""){
        info.innerHTML = "Wprowadź wysokość ściany 3";
    } else if(wysokosc3<=0){
        info.innerHTML = "Wysokość ściany 3 nie może być ujemna!.";
    } else if (isNaN(wysokosc3)) {
        info.innerHTML = "Wysokość ściany 3, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(sufit==""){
        info.innerHTML = "Wprowadź szerokość sufitu";
    } else if(sufit<=0){
        info.innerHTML = "Szerokość sufitu nie może być ujemna!.";
    } else if (isNaN(sufit)) {
        info.innerHTML = "Szerokość sufitu, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(sufit2==""){
        info.innerHTML = "Wprowadź długość sufitu";
    } else if(sufit2<=0){
        info.innerHTML = "Długość sufitu nie może być ujemna!.";
    } else if (isNaN(sufit2)) {
        info.innerHTML = "Długość sufitu, którą wprowadziłeś/aś nie jest liczbą.";
    } else{
        var pole=(wysokosc1*szerokosc1)+(wysokosc2*szerokosc2)+(wysokosc3*szerokosc3)+(sufit*sufit2);
        powierzchnia.innerHTML+=pole+"<sup>2</sup>";
        var puszki=pole/4;
        puszki=Math.ceil(puszki);
        farba.innerHTML+=puszki;
    }
}

