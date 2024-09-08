var rozmiar = 10;
var x=1;
function pulsacja(){
    if(animacja){
        obrazek.style.width = rozmiar+"%";
        obrazek.style.height = rozmiar+"%";
        rozmiar+=x;
        if(rozmiar>=30){
            x=x*-1;
        }
        if(rozmiar<=10){
            x=x*-1
        }
        setTimeout("pulsacja()",50)
    }
}
var p = 0;
var px = 1;
function prawo(){
    if(animacja){
        obrazek.style.left = p+"%";
        p+=px;
        if(p>50){
            px+=-1;
        }
        if(p<=0){
            px+=+1;
        }
        setTimeout("prawo()",50);
    }
}
var l = 0;
var lx = 1;
function lewo(){
    if(animacja){
        obrazek.style.right = l+"%";
        l+=lx;
        if(l>50){
            lx+=-1;
        }
        if(l<=0){
            lx+=+1;
        }
        setTimeout("lewo()",50);
    }
}
var g = 0;
var gx = 1;
function gora(){
    if(animacja){
        obrazek.style.bottom = g+"%";
        g+=gx;
        if(g>50){
            gx+=-1;
        }
        if(g<=0){
            gx+=+1;
        }
        setTimeout("gora()",50);
    }
}
var d = 0;
var dx = 1;
function dol(){
    if(animacja){
        obrazek.style.top = d+"%";
        d+=dx;
        if(d>50){
            dx+=-1;
        }
        if(d<=0){
            dx+=+1;
        }
        setTimeout("dol()",50);
    }
}
var lg = 0;
var lgx = 1;
function lewogora(){
    if(animacja){
        obrazek.style.right = lg+"%";
        obrazek.style.bottom = lg+"%";
        lg+=lgx;
        if(lg>50){
            lgx+=-1;
        }
        if(lg<=0){
            lgx+=+1;
        }
        setTimeout("lewogora()",50);
    }
}
var ld = 0;
var ldx = 1;
function lewodol(){
    if(animacja){
        obrazek.style.right = ld+"%";
        obrazek.style.top = ld+"%";
        ld+=ldx;
        if(ld>50){
            ldx+=-1;
        }
        if(ld<=0){
            ldx+=+1;
        }
        setTimeout("lewodol()",50);
    }
}
var pg = 0;
var pgx = 1;
function prawogora(){
    if(animacja){
        obrazek.style.left = pg+"%";
        obrazek.style.bottom = pg+"%";
        pg+=pgx;
        if(pg>50){
            pgx+=-1;
        }
        if(pg<=0){
            pgx+=+1;
        }
        setTimeout("prawogora()",50);
    }
}
var pd = 0;
var pdx = 1;
function prawodol(){
    if(animacja){
        obrazek.style.left = pd+"%";
        obrazek.style.top = pd+"%";
        pd+=pdx;
        if(pd>50){
            pdx+=-1;
        }
        if(pd<=0){
            pdx+=+1;
        }
        setTimeout("prawodol()",50);
    }
}
