function piramida2(){
    var obrazek = document.getElementById("obrazek").value;
    var wysokosc = document.getElementById("wysokosc2").value;
    var info = document.getElementById("infopiramida");
    var piramida = document.getElementById("piramida2");
    piramida.innerHTML="";
    if(wysokosc==""){
        info.innerHTML = "Wprowadź wysokość obrazków do wyświetlenia!";
    } else if(wysokosc<0){
        info.innerHTML = "Wysokość obrazków nie może być ujemna!.";
    } else if (isNaN(wysokosc)) {
        info.innerHTML = "Wysokość, którą wprowadziłeś/aś nie jest liczbą.";
    } else{
        for(var i=0; i<wysokosc; i++) {
            var j=0;
            do {
                var zdj = document.createElement("img");
                zdj.classList.add("zdjecie-"+i);
                zdj.style.height="50px";
                zdj.style.width="50px";
                zdj.src=obrazek+".png";
                piramida.appendChild(zdj);
                j++;
            } while (j<=i);
            piramida.innerHTML+="<br>";
        }
    }
}

function kostka() {	
    var kostka = document.getElementById("kostka");
    var szerokosc = document.getElementById("szerokosc").value;
    var wysokosc = document.getElementById("wysokosc").value;
	kostka.innerHTML="";
	for(var i=1;i<=wysokosc;i++){
		for(var k=1; k<=szerokosc; k++){ 
			if(i==1||i==wysokosc || k==1|| k==szerokosc){
                var zdj = document.createElement("img");
                zdj.classList.add("zdjecie-"+i);
                zdj.style.height="50px";
                zdj.style.width="50px";
                zdj.src="KWADRAT.png";
                kostka.appendChild(zdj);
            } else {
                var zdj = document.createElement("img");
                zdj.classList.add("zdjecie-"+i);
                zdj.style.height="50px";
                zdj.style.width="50px";
                zdj.src="kolo2.png";
                kostka.appendChild(zdj);
            }
		}
		kostka.innerHTML+="<br>";
	}
}

function piramida(){
    var gora = document.getElementById("klepsydragora").value;
    var dol = document.getElementById("klepsydradol").value;
    var wysokosc = document.getElementById("wysokosc").value;
    var info = document.getElementById("info");
    var piramida = document.getElementById("piramida");
    piramida.innerHTML="";
    if(wysokosc==""){
        info.innerHTML = "Wprowadź wysokość obrazków do wyświetlenia!";
    } else if(wysokosc<0){
        info.innerHTML = "Wysokość obrazków nie może być ujemna!.";
    } else if (isNaN(wysokosc)) {
        info.innerHTML = "Wysokość, którą wprowadziłeś/aś nie jest liczbą.";
    } else{
        for(var i=0; i<=wysokosc; i++){
            for(var k=i+1; k<=wysokosc; k++){
                var zdj = document.createElement("img");
                zdj.classList.add("zdjecie-"+i);
                zdj.style.height="50px";
                zdj.style.width="50px";
                zdj.style.rotate="180deg";
                zdj.src=gora+".png";
                piramida.appendChild(zdj);
            }
            piramida.innerHTML+="<br>";
        }
        for(var i=0; i<wysokosc; i++) {
            var j=0;
            do {
                var zdj = document.createElement("img");
                zdj.classList.add("zdjecie-"+i);
                zdj.style.height="50px";
                zdj.style.width="50px";
                zdj.src=dol+".png";
                piramida.appendChild(zdj);
                j++;
            } while (j<=i);
            piramida.innerHTML+="<br>";
        }
    }
}