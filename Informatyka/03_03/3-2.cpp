#include <iostream>
#include <fstream>
#include <cmath>
using namespace std;

int dzielnikipierwsze(int liczba)
{
	int dzielnik=2;
	int ile=0;
	
	while (liczba>1)
	{
      if(liczba%dzielnik==0)	ile++;
	  while(liczba%dzielnik==0) liczba/=dzielnik;
	  dzielnik++;          
   }
	
	return ile;
}

main()
{
	ifstream plik("liczby.txt");
	int liczby[2000];
	for(int i=0;i<2000;i++) plik>>liczby[i];
	int ile=0,pierwsza;
	
for(int i=0;i<2000;i++)
{
 	if((float)sqrt(liczby[i])*sqrt(liczby[i])==liczby[i]) {
 	                                                        ile++;
 	                                                        if(ile==1) pierwsza=liczby[i];
 	                                                     }                                               
}

cout<<"3.1. "<<ile<<" pierwsza z nich to: "<<pierwsza;

cout<<"\n --------------- \n ";
for(int i=0;i<2000;i++) if(dzielnikipierwsze(liczby[i])>=5) cout<<liczby[i]<<" ";
cout<<"\n --------------- \n ";	

int max,min;

int rowne=0,wieksze=0,mniejsze=0;
int roznica;

for(int i=0;i<2000;i++)
{
int a=liczby[i];
int cyfry[4];
for(int i=0;i<4;i++) {
                       cyfry[i]=a%10;
                       a/=10;
                     }
        
for(int i=0;i<4;i++) 
  for(int j=0;j<4;j++) if(cyfry[j]>cyfry[j+1]) swap(cyfry[j],cyfry[j+1]);

 max=1000*cyfry[3]+100*cyfry[2]+10*cyfry[1]+cyfry[0];
 min=1000*cyfry[0]+100*cyfry[1]+10*cyfry[2]+cyfry[3];

if(max-min==liczby[i]) rowne++;
else if(max-min>liczby[i]) wieksze++;
else mniejsze++;
}

cout<<"\n  ROWNE: "<<rowne<<" WIEKSZE: "<<wieksze<<"  MNIEJSZE: "<<mniejsze;



}
