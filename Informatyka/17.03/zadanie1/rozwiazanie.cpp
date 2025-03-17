#include <fstream>
#include <iostream>
#include <math.h>
using namespace std;

bool czypierwsza(int liczba)
{
	for(int dz=2;dz<=sqrt(liczba);dz++) if(liczba%dz==0) return false;
	return true;
}

int NWD(int a,int b)
{
	while(a!=b)
	{
		if(a>b) a-=b;
		else b-=a;
	}
  return a;
}
long long potega(int l,int p)
{
	long long wynik=1;
	for(int i=1;i<=p;i++) wynik*=l;
	return wynik;
}

bool sprawdz(int M,int a, int b)
{
	
	long long wynik=1;
	for(int i=0;i<M;i++)
	{
		if(wynik%M==b) return true;
		wynik=(wynik*a)%M;
	}
	
	return false;
}


main()
{
	int M[1000],a[1000],b[1000];
	ifstream plik("liczby.txt");
	for(int i=0;i<1000;i++) plik>>M[i]>>a[i]>>b[i];
	int ile=0;
	
	for(int i=0;i<1000;i++) if(czypierwsza(M[i])) ile++;
	cout<<" 3.3. "<<ile;
	int ile2=0;
 	for(int i=0;i<1000;i++) if(NWD(M[i],a[i])==1) ile2++;
	cout<<" 3.4. "<<ile2;
	
	int ile3=0;
	
	for(int i=0;i<1000;i++)
	{
		if(sprawdz(M[i],a[i],b[i]))   ile3++;
                                                 	
	}
	
		cout<<" 3.5. "<<ile3;
}
