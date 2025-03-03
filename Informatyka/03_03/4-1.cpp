#include <iostream>
#include <fstream>
#include <cmath>
using namespace std;



main()
{
	ifstream plik("prostokaty.txt");
	int wysokosc[5000],szerokosc[5000];
	
	for(int i=0;i<5000;i++) plik>>wysokosc[i]>>szerokosc[i];
	
    long long pole,maxpole=0,minpole=999999999;	
 
   	for(int i=0;i<5000;i++) 
   	{
   		pole=wysokosc[i]*szerokosc[i];
   		
   		if(pole>maxpole) maxpole=pole;
   		if(pole<minpole) minpole=pole;
   	}
   
   cout<<" MAXPOLE: "<<maxpole<<"  MINPOLe: "<<minpole;
   
   int seria=1,maxseria=1,wys_ost,szer_ost;
   int wys=wysokosc[0],szer=szerokosc[0];
   
   for(int i=1;i<5000;i++) 
   {
   	  if(wysokosc[i]<=wys & szerokosc[i]<=szer) seria++;
   	  else  {
   	  	      if(seria>maxseria) {
   	  	                          maxseria=seria;
   	  	                          wys_ost=wysokosc[i-1];
   	  	                          szer_ost=szerokosc[i-1];
   	  	         	            }
   	  	   
			seria=1;	
	 	            
           }
        wys=wysokosc[i];
		szer=szerokosc[i];    
   }
   
   cout<<" MAXSERIA: "<<maxseria<<" OSTATNI ELEMENT: "<<wys_ost<<" x "<<szer_ost;
   cout<<" \n -----------------\n ";
   
   
   int maxszer=0,nowaszer=0;
   
   for(int i=0;i<5000;i++) 
     for(int j=i+1;j<5000-1;j++)
     {
     	  if(wysokosc[i]==wysokosc[j]) nowaszer=szerokosc[i]+szerokosc[j];
     	  if(nowaszer>maxszer) maxszer=nowaszer;
    }
   
   cout<<" DLa 2 maxszer: "<<maxszer;
   
   
   
     maxszer=0,nowaszer=0;
   
   for(int i=0;i<5000-3;i++) 
     for(int j=i+1;j<5000-2;j++)
       for(int k=j+1;k<5000-1;k++)
     {
     	  if(nowaszer>maxszer) maxszer=nowaszer;
    }
   
   cout<<" DLa 3 maxszer: "<<maxszer;
   
   
   
}
