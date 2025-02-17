#include <iostream>
#include <fstream>
using namespace std;

main()
{
	long liczby1[3000];
	long long liczby2[20];
	ifstream plik("liczby.txt");
	
	for(int i=0;i<3000;i++)  plik>>liczby1[i];
	for(int i=0;i<20;i++)  plik>>liczby2[i];
	
	int ile=0;
	
    for(int i=0;i<3000;i++)
      for(int j=0;j<20;j++) if(liczby2[j]%liczby1[i]==0) {
                                                              ile++;
                                                              break;
                                                           }
     //sortowanie
	 
	 for(int i=0;i<3000;i++) 
	  for(int j=0;j<3000-1;j++) if(liczby1[j]<liczby1[j+1]) swap(liczby1[j],liczby1[j+1]);
      
              
      cout<<" ZAD 1: "<<ile;
      cout<<" \n 101 liczba to: "<<liczby1[100]<<endl;
	long long temp;
	
		
	for(int i=0;i<20;i++)
	 {
	  temp=liczby2[i];
	 	  
	 for(int d=0;d<3000;d++)
	  {
	   if(liczby2[i]%liczby1[d]==0)	
	   {
	   	 liczby2[i]/=liczby1[d];
	   }
	   
      }
	 	if(liczby2[i]==1) cout<<temp<<endl;
	 		 	
	 }
	 
	 float srednia,sredniamax=0,suma,ilemax;
	 long start=liczby1[0];
	 ile=0;
	 
	 for(int i=0;i<=2950;i++)
	 {
	 	bool koniec=false;
	 	while(!koniec)
	 	{
	 		suma+=liczby1[i];
			ile++;
			srednia=(float)suma/ile;
			if(ile>=50) 	 		
			{
			  if(liczby1[i+ile]<srednia) koniec=true;	
			}
			if(srednia>sredniamax)
			 {
			 	sredniamax=srednia;
			 	start=liczby1[i];
			 	ilemax=ile;
			 }
	 	}
	 	
	 	cout<<" \n Liczba elementow:  "<<ilemax<<endl;
	 	cout<<" SRDNIA: "<<sredniamax<<endl;
	 	cout<<" Pierwszy element: "<<start;
	 	
	 }
	 
	 
	 
	 
	 
	 
	 
	 
	 
	
}
