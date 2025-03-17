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
   
  
   for(int i=1;i<255;i++) cout<<i<<"-"<<char(i)<<" "; 
   cout<<nasystem(160,16)<<endl;
   cout<<zsystemu("FF",16);
   /*
   
    ifstream plik("bin.txt");
    string liczba;
	
	while(!plik.eof())
	{
	   plik>>liczba;
	   if(zsystemu(liczba,2)%5==0)	cout<<liczba<<" "<<zsystemu(liczba,2)<<endl; 
	}
	*/
	
}
