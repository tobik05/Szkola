#include <iostream>
#include <fstream>
using namespace std;

string dec_bin(long liczba)
{
   string wynik="";
   while(liczba>0)
   {
   	if(liczba%2!=0) wynik='1'+wynik;
   	else wynik='0'+wynik;
   	liczba/=2;
   }
   return wynik;
}
long bin_dec(string bin)
{
	 long wynik=0;
	 long podstawa=1;
	 
	 for(int i=bin.length()-1;i>=0;i--)
	 {
	 	if(bin[i]=='1') wynik+=podstawa;
	 	podstawa*=2;
	 }
    return wynik;	
}

string XOR(string a,string b)
{
	if(a.length()>b.length()) 
	{
       int r=a.length()-b.length();
       for(int i=1;i<=r;i++) b='0'+b;
    }
    else 
	{
	   int r=b.length()-a.length();
       for(int i=1;i<=r;i++) a='0'+a;
    }
    
    string wynik="";
    for(int i=0;i<a.length();i++)
    {
    	if(a[i]==b[i]) wynik=wynik+'0';
    	else wynik=wynik+'1';
    }
     return wynik; 
}

main()
{
	   string bin;
    	ifstream plik("bin.txt");
    	ofstream plik2("wyniki2_5.txt");
  	for(int i=1;i<=100;i++)
	{
		plik>>bin;
		
	    plik2<<XOR(bin,dec_bin(bin_dec(bin)/2) )<<endl;	
   }
    plik2.close();

}
