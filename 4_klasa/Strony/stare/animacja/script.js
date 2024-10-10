var obrazki=["4.jpg","3.jpg","2.jpg","1.jpg","bum.jpg"];
var i = 0;
var animacja = false;
var cos = 2;
var szybkosc = 500;
function pokazobrazki(cos)
{
    if(cos==1){
        szybkosc=szybkosc+250;
    }else if(cos==0){
        szybkosc=szybkosc-250;
    }
    if(animacja==true){
        obrazek.src=obrazki[i]; 
        i++;
        if(i>4) i=0;
        setTimeout("pokazobrazki(cos)",szybkosc);
    }
    console.log(cos,animacja, szybkosc)
}