function zmianakoloru(){
    var R = (parseFloat(document.getElementById("r").value));
    var G = parseFloat(document.getElementById("g").value);
    var B = parseFloat(document.getElementById("b").value);

    var info = document.getElementById("info");
    var box = document.getElementById("box");

    info.innerHTML="";
    if(R==""){
        info.innerHTML = "Wprowadź R!";
    } else if(R<-1){
        info.innerHTML = "Wartośc R nie może być ujemna!.";
    } else if (isNaN(R)) {
        info.innerHTML = "Wartość R, którą wprowadziłeś/aś nie jest liczbą.";
    } if(G==""){
        info.innerHTML = "Wprowadź G!";
    } else if(G<-1){
        info.innerHTML = "Wartośc G nie może być ujemna!.";
    } else if (isNaN(G)) {
        info.innerHTML = "Wartość G, którą wprowadziłeś/aś nie jest liczbą.";
    } if(B==""){
        info.innerHTML = "Wprowadź B!";
    } else if(B<-1){
        info.innerHTML = "Wartośc B nie może być ujemna!.";
    } else if (isNaN(B)) {
        info.innerHTML = "Wartość B, którą wprowadziłeś/aś nie jest liczbą.";
    } else{
        box.style.backgroundColor="rgb("+R+", "+G+", "+B+")";
    }
}
function kolor(kolor){
    var box = document.getElementById("box");
    box.style.backgroundColor=kolor;
}