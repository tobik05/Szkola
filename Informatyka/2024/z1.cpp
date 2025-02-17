#include <iostream>
#include <fstream>
using namespace std;

long nieparzysty_skrot(long liczba)
{
   	long skrot=0,mnoznik=1;
	while(liczba>0)
	{
		if(liczba%10%2!=0) {
		                      skrot=skrot+liczba%10*mnoznik;
	     		              mnoznik*=10;
	     		           }
	    liczba/=10;
	}
	
	return skrot;
}

long nwd(long a,long b)
{
	while(a!=b)
	{
		if(a>b) a-=b;
		else b-=a;
	}
	return a;
}
main()
{
	long liczba,ile=0,max=0;
   
    ifstream plik("skrot.txt");

    for(int i=1;i<=200;i++)
    {
      plik>>liczba;
	 if(nieparzysty_skrot(liczba)==0) 
	{
		ile++;
		if(liczba>max) max=liczba;
	}
	
    }
	cout<<" Liczb z brakiem nieparzystego skrotu jest: "<<ile;
	cout<<" Najwieksza z nichg to: "<<max;
	
	ifstream plik2("skrot2.txt");
	ofstream plik3("wynik3_3.txt");
	 for(int i=1;i<=200;i++)
    {
      plik2>>liczba;
      
      if(nwd(liczba,nieparzysty_skrot(liczba))==7) 
      { 
      	 plik3<<liczba<<endl;
      }
      
    }
    plik3.close();
	
	
	
	
}
