#include <fstream>
#include <iostream>
#include <math.h>
using namespace std;

bool czypierwsza(long liczba)
{
	for(int dz=2;dz<=sqrt(liczba);dz++) if(liczba%dz==0) return false;
	return true;
}

int ile_sposobow(long liczba)
{
	int ile=0;
	
	for(long x=2;x<=liczba/2;x++)
	{
		if(czypierwsza(x)) 
		 if(czypierwsza(liczba-x)) 
		   ile++;
	}
	
  return ile;
}
string nasystem(long liczba,int system)
{
	string wynik="";
	while(liczba>0)
	{
	   char znak=liczba%system+48;
	   if(znak>=58) znak+=7;
	   wynik=znak+wynik;
	   liczba/=system;	
	}
	return wynik;
}

main()
{
   long  liczba[100];
	ifstream plik("liczby.txt");
	for(int i=0;i<100;i++) plik>>liczba[i];
    int ile=0;

	for(int i=0;i<100;i++) if(czypierwsza(liczba[i]-1)) ile++;
	cout<<" 3.2. "<<ile;
	cout<<"\n------------------------\n";
	
	 long maxliczba,maxrozklady=0,minliczba,minrozklady=10000;
	 
	 for(int i=0;i<100;i++)
	 {
	    int sposoby=ile_sposobow(liczba[i]);
	   	if(sposoby>maxrozklady)               {
	 		                                      maxrozklady=sposoby;
	 		                                      maxliczba=liczba[i];
	 	                                       }
	 	if(sposoby<minrozklady)               {
	 		                                      minrozklady=sposoby;
	 		                                      minliczba=liczba[i];
	 	                                       }
	 	
	 	
	 }
	 
	 cout<<"\n 3.3 "<<maxliczba<<"  - "<<maxrozklady<<"    "<<minliczba<<"  "<<minrozklady;
  
  
  	cout<<"\n------------------------\n";
  	int liczniki[17];
  	for(int i=0;i<17;i++) liczniki[i]==0;
  	
  	for(int i=0;i<100;i++)
  	{
  		string wynik=nasystem(liczba[i],16);
  	    cout<<wynik<<endl;
	  
	   for(int k=0;k<wynik.length();k++)
	   {
	   	if(wynik[k]>=65)  liczniki[wynik[k]-55]++;
		else liczniki[wynik[k]-48]++;
	    }
	  	
  	}
  	
  	cout<<" 3.4. \n";
  	
  	for(int i=0;i<16;i++)
  	cout<<liczniki[i]<<endl;
  	
  	
  	
  
  
}
