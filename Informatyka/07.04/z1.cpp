#include <iostream>
using namespace std;
main()
{
	int liczba;
	string bin="";
	
	cout<<" Podaj liczbe ";
	cin>>liczba;
	
	while(liczba>0)
	{
		if(liczba%2==0) bin='0'+bin;
		else bin='1'+bin;
		liczba/=2;
	}
	cout<<bin<<endl;
	
	int p=1;
	for(int i=bin.length()-1;i>=0;i--)
	{
		if(bin[i]=='1') cout<<p<<" ";
		p++;
	}
	
}
