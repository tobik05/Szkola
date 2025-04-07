#include <iostream>
#include <fstream>
using namespace std;

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

long zsystemu(string liczba,int system)
{
	long wynik=0;
	int potega=1;
	for(int i=liczba.length()-1;i>=0;i--)
	{
		long cyfra=liczba[i]-48;
		if(cyfra>=10) cyfra-=7;
		wynik+=cyfra*potega;
		potega*=system;
	}
	return wynik;
}




main()
{
   
 
   
    ifstream plik("liczby_4_3000.txt");
    string liczba;
	ofstream plikZ("z1.txt");
	int ile=0;
	
	while(!plik.eof())
	{
	   plik>>liczba;
	   if(zsystemu(liczba,4)%7==0)	{
	                                  plikZ<<liczba<<endl; 
	                                  ile++;
	                                }
	}
	
	plikZ.close();
	
	cout<<" Takich liczb jest "<<ile;
}




