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
	

	 float srednia,sredniamax=0,suma,ilemax;
	 long start=liczby1[0];
	 int ile=0;
	 
		
	 for(int i=0;i<2950;i++)
	 {
	 	bool koniec=false;
	 	ile=0;
	 	suma=0;
	 		while(!koniec)
	 	{ 
	 	 for(int j=i;j<3000;j++)
		 {
	 		suma+=liczby1[j];
			ile++;
			srednia=(float)suma/ile;
			
			if(ile>=50) 	 		
			{
				if(liczby1[i+ile]<srednia){
					koniec=true;	
					if(srednia>sredniamax)
			 			{
			 				sredniamax=srednia;
			 				start=liczby1[i];
			 				ilemax=ile;
			 			}
		}
			}
		}
	 	}
	 	
	 
	 	
	 }
	 
	 	cout<<" \n Liczba elementow:  "<<ilemax<<endl;
	 	cout<<" SRDNIA: "<<sredniamax<<endl;
	 	cout<<" Pierwszy element: "<<start;
	 
	 
	 
	 
	 
	 
	 
	
}
