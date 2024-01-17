var ocena=new Array(17);
var przedmiot=new Array(17);
function pobierzdane(){
    ocena=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    if (parseFloat(document.getElementById("o0").value)==document.getElementById("o0").value) ocena[0]=parseFloat(document.getElementById("o0").value);
    if (parseFloat(document.getElementById("o1").value)==document.getElementById("o1").value) ocena[1]=parseFloat(document.getElementById("o1").value);
    if (parseFloat(document.getElementById("o2").value)==document.getElementById("o2").value) ocena[2]=parseFloat(document.getElementById("o2").value);
    if (parseFloat(document.getElementById("o3").value)==document.getElementById("o3").value) ocena[3]=parseFloat(document.getElementById("o3").value);
    if (parseFloat(document.getElementById("o4").value)==document.getElementById("o4").value) ocena[4]=parseFloat(document.getElementById("o4").value);
    if (parseFloat(document.getElementById("o5").value)==document.getElementById("o5").value) ocena[5]=parseFloat(document.getElementById("o5").value);
    if (parseFloat(document.getElementById("o6").value)==document.getElementById("o6").value) ocena[6]=parseFloat(document.getElementById("o6").value);
    if (parseFloat(document.getElementById("o7").value)==document.getElementById("o7").value) ocena[7]=parseFloat(document.getElementById("o7").value);
    if (parseFloat(document.getElementById("o8").value)==document.getElementById("o8").value) ocena[8]=parseFloat(document.getElementById("o8").value);
    if (parseFloat(document.getElementById("o9").value)==document.getElementById("o9").value) ocena[9]=parseFloat(document.getElementById("o9").value);
    if (parseFloat(document.getElementById("o10").value)==document.getElementById("o10").value) ocena[10]=parseFloat(document.getElementById("o10").value);
    if (parseFloat(document.getElementById("o11").value)==document.getElementById("o11").value) ocena[11]=parseFloat(document.getElementById("o11").value);
    if (parseFloat(document.getElementById("o12").value)==document.getElementById("o12").value) ocena[12]=parseFloat(document.getElementById("o12").value);
    if (parseFloat(document.getElementById("o13").value)==document.getElementById("o13").value) ocena[13]=parseFloat(document.getElementById("o13").value);
    if (parseFloat(document.getElementById("o14").value)==document.getElementById("o14").value) ocena[14]=parseFloat(document.getElementById("o14").value);
    if (parseFloat(document.getElementById("o15").value)==document.getElementById("o15").value) ocena[15]=parseFloat(document.getElementById("o15").value);
    if (parseFloat(document.getElementById("o16").value)==document.getElementById("o16").value) ocena[16]=parseFloat(document.getElementById("o16").value);
    console.log(ocena);
    przedmiot[0]="Chemia;";
    przedmiot[1]="Geografia";
    przedmiot[2]="Informatyka";
    przedmiot[3]="Matematyka";
    przedmiot[4]="Biologia";
    przedmiot[5]="Język angielski";
    przedmiot[6]="Język niemiecki";
    przedmiot[7]="Język obcy zawodowy";
    przedmiot[8]="Język polski";
    przedmiot[9]="Historia";
    przedmiot[10]="Praktyka zawodowa";
    przedmiot[11]="Programowanie aplikacji internetowych";
    przedmiot[12]="Projektowanie i administrowanie bazami danych";
    przedmiot[13]="Projektowanie stron internetowych";
    przedmiot[14]="Wiedza o społeczeńswo";
    przedmiot[15]="Religia";
    przedmiot[16]="Wychowanie fizyczne";
    for (var i = 0; i <= 16; i++) {
        var inputValue = parseFloat(document.getElementById("o" + i).value);

        if (!isNaN(inputValue) && inputValue >= 0 && inputValue <= 6) {
            ocena[i] = inputValue;
        } else {
            alert("Błąd: Wprowadzona ocena dla przedmiotu " + przedmiot[i] + " jest nieprawidłowa.");
        }
    }
}  

function srednia(){
    pobierzdane();
    wyniksrednia = document.getElementById("wyniksrednia");
    var licznik=0;
    for(var i=0;i<=16;i++){
        licznik+=ocena[i];
    }
    srednia=licznik/17;
    wyniksrednia.innerHTML="Twoja średnia wynosi: "+srednia.toFixed(2);
}
function iloscocen(){
    wynikiloscocen = document.getElementById("wynikiloscocen");
    pobierzdane();
    var ndst=0, dop=0, dost=0,dob=0,bdb=0,cel=0;
    for(var i=0; i<=16;i++){
        if(ocena[i]==1)ndst++;
        if(ocena[i]==2)dop++;
        if(ocena[i]==3)dost++;
        if(ocena[i]==4)dob++;
        if(ocena[i]==5)bdb++;
        if(ocena[i]==6)cel++;
    }
    wynikiloscocen.innerHTML="Ilośc ocen: NDST: "+ndst+", DOP: "+dop+", DOST: "+dost+", DOB: "+dob+", BDB: "+bdb+", CEL: "+cel;
    
}
function prymus(){
    wynikprymus = document.getElementById("wynikprymus");
    pobierzdane();
    var licznik=0;
    for(var i=0;i<=16;i++){
        licznik+=ocena[i];
    }
    srednia=(licznik/17).toFixed(2);
    if(srednia>4.75){
        wynikprymus.innerHTML="Czy jesteś prymusem? "+"TAK, masz średnią: "+srednia;
    } else{
        wynikprymus.innerHTML="Czy jesteś prymusem? "+"nie :( , zabrakło ci: "+(4.75-srednia)+" . Masz średnią: "+srednia;
    }
}
function zawodowe(){
    wynikzawodowe = document.getElementById("wynikzawodowe");
    pobierzdane();
    var licznik=0;
    licznik+=ocena[11]+ocena[12]+ocena[13];
    var srednia=(licznik/3).toFixed(2);
    wynikzawodowe.innerHTML="Średnia twoich ocen z przedmiotów zawodowych wynosi: "+srednia;
}
function scisle(){
    wynikscisle = document.getElementById("wynikscisle");
    pobierzdane();
    var licznik=0;
    licznik+=ocena[0]+ocena[1]+ocena[2]+ocena[3]+ocena[4];
    var srednia=(licznik/5).toFixed(2);
    wynikscisle.innerHTML="Średnia twoich ocen z przedmiotów ścisłych wynosi: "+srednia;
}
function humanistyczne(){
    wynikhumanistyczne = document.getElementById("wynikhumanistyczne");
    pobierzdane();
    var licznik=0;
    licznik+=ocena[5]+ocena[6]+ocena[7]+ocena[8]+ocena[9]+ocena[14];
    var srednia=(licznik/6).toFixed(2);
    wynikhumanistyczne.innerHTML="Średnia twoich ocen z przedmiotów humanistycznych wynosi: "+srednia;
}
function najlepsza(){
    wyniknajlepsza = document.getElementById("wyniknajlepsza");
    pobierzdane();
    var max=0, miejsce=-1;
    for(var i=0;i<=16;i++){
        if(ocena[i]>max){
            max=ocena[i]
            miejsce=i;
        }
    }
    wyniknajlepsza.innerHTML="Najlepsza twoja ocena to: "+max+" - "+przedmiot[miejsce];
}
function najgorsza(){
    wyniknajgorsza = document.getElementById("wyniknajgorsza");
    pobierzdane();
    var min=1, miejsce=-1;
    for(var i=0;i<=16;i++){
        if(ocena[i]>=min){
            max=ocena[i]
            miejsce=i;
        }
    }
    wyniknajgorsza.innerHTML="Najgorsza twoja ocena to: "+min+" - "+przedmiot[miejsce];
}