function pokaz(id){
    console.log(id);
    if(id=="#login"){
        document.getElementById("login").style.display="flex";
        document.getElementById("zakupy").style.display="none";
        document.getElementById("kontakt").style.display="none";
    }
    if(id=="#kontakt"){
        document.getElementById("login").style.display="none";
        document.getElementById("zakupy").style.display="none";
        document.getElementById("kontakt").style.display="flex";
    }
    if(id=="#zakupy"){
        document.getElementById("login").style.display="none";
        document.getElementById("zakupy").style.display="flex";
        document.getElementById("kontakt").style.display="none";
    }
}