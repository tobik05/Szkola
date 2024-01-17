function obrazki(){
    var obrazek = document.getElementById("obrazek").value;
    var ilosc = document.getElementById("ilosc").value;
    var wysokosc = document.getElementById("wysokosc").value;
    var szerokosc = document.getElementById("szerokosc").value;
    var info = document.getElementById("info");
    var zdjecia = document.getElementById("zdjecia");
    
    if(ilosc==""){
        info.innerHTML = "Wprowadź ilosc obrazków do wyświetlenia!";
    } else if(ilosc<0){
        info.innerHTML = "Ilość obrazków nie może być ujemna.";
    } else if (isNaN(ilosc)) {
        info.innerHTML = "Ilość, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(wysokosc==""){
        info.innerHTML = "Wprowadź wysokość obrazków do wyświetlenia!";
    } else if(wysokosc<0){
        info.innerHTML = "Wysokość obrazków nie może być ujemna!.";
    } else if(wysokosc>1000){
        info.innerHTML = "Wysokość obrazków nie może być większa, niż 1000px.";
    } else if (isNaN(wysokosc)) {
        info.innerHTML = "Wysokość, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(szerokosc==""){
        info.innerHTML = "Wprowadź szerokość obrazków do wyświetlenia!";
    } else if(szerokosc<0){
        info.innerHTML = "Szerokość obrazków nie może być ujemna!.";
    } else if(szerokosc>1000){
        info.innerHTML = "Szerokość obrazków nie może być większa, niż 1000px.";
    } else if (isNaN(szerokosc)) {
        info.innerHTML = "Szerokość, którą wprowadziłeś/aś nie jest liczbą.";
    } else{
        console.log(obrazek+", "+ilosc+", "+wysokosc+", "+szerokosc);
        for(var i=1; i<=ilosc; i++){
            var el = document.createElement("img");
            el.classList.add("zdjecie-"+i);
            el.style.height=wysokosc+"px";
            el.style.width=szerokosc+"px";
            el.src=obrazek+".png";
            zdjecia.appendChild(el);
        }
    }
}
function liczby(){
    var liczba = document.getElementById("liczba").value;
    var liczby = document.getElementById("liczby");
    var infoliczby = document.getElementById("infoliczby");
    liczby.innerHTML+="";
    if (isNaN(liczba)) {
        infoliczby.innerHTML = "Wartość, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(liczba==""){
        infoliczby.innerHTML = "Wprowadź liczbę do wyświetlenia!";
    } else {
        for(var i=1; i<=liczba; i++){
            if(i%10==0){
                liczby.innerHTML+=i+"<br>";
            } else {
                liczby.innerHTML+=i+" ";
            }
        }
    }
}
function tabele(){
    var wiersze = document.getElementById("wiersze").value;
    var kolumny = document.getElementById("kolumny").value;
    var tabele = document.getElementById("tabele");
    var infotabela = document.getElementById("infotabela");
    if(wiersze==""){
        infotabela.innerHTML = "Wprowadź ilosc wierszy do wyświetlenia";
    } else if(wiersze<0){
        infotabela.innerHTML = "Ilość wierszy nie może być ujemna.";
    } else if (isNaN(wiersze)) {
        infotabela.innerHTML = "Ilość wierszy, którą wprowadziłeś/aś nie jest liczbą.";
    } else if(kolumny==""){
        infotabela.innerHTML = "Wprowadź ilosc kolumn do wyświetlenia!";
    } else if(kolumny<0){
        infotabela.innerHTML = "Ilość kolumn nie może być ujemna.";
    } else if (isNaN(kolumny)) {
        infotabela.innerHTML = "Ilość kolumn, którą wprowadziłeś/aś nie jest liczbą.";
    } else {
        console.log(wiersze+", "+kolumny);
        for(i=1; i<=wiersze; i++){
            var tr = document.createElement("tr");
            tr.classList.add("wiersz-"+i);
            tabele.appendChild(tr);
            tr.innerHTML+=i;

            if (i==1) {
                for(k=1; k<=kolumny; k++){
                    var td = document.createElement("td");
                    td.classList.add("kolumna-"+i);
                    tr.appendChild(td);
                    td.innerHTML+=k;
                }
            } else {
                for(k=1; k<=kolumny; k++){
                    var td = document.createElement("td");
                    td.classList.add("kolumna-"+k);
                    tr.appendChild(td);
                    td.innerHTML+=i;
                }
            }
        }
    }
}
