#include <iostream>
#include <fstream>
#include <cmath>
using namespace std;

int dzielnikipierwsze(int liczba)
{
	int dzielnik=2;
	int ile=0;
	
	while (liczba>0)
	{
		
	 if(liczba%dzielnik==0) {
	                          liczba/=dzielnik;
	                          cout<<dzielnik<<" ";
	                      }
	 else dzielnik++;          
		
	}
	
	
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


dzielnikipierwsze(120);

}
