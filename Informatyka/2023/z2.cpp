#include <iostream>
#include <fstream>
using namespace std;
int ile_blok(string bin)
{
	int bloki=1;
	for(int i=0;i<bin.length()-1;i++) if(bin[i]!=bin[i+1]) bloki++;
    return bloki;
}
main()
{
	ifstream plik("bin.txt");
	int ile=0;
	int maxdl=0,max1=0,ile1=0;
	int k;
	string bin,maxbin;
	for(int i=1;i<=100;i++)
	{
		plik>>bin;
		if(ile_blok(bin)<=2) ile++;
	
		if(bin.length()>maxdl) 
		{
		   maxdl=bin.length();
	       maxbin=bin;   
	       max1=0;
		   k=0;
		   while(bin[k]!='0')
		   {
             max1++;
			 k++;		   	
		   }
		}
		else if(bin.length()==maxdl)
		{
		   ile1=0;
		   k=0;
		   while(bin[k]!='0')
		   {
             ile1++;
			 k++;		   	
		   }
		   if(ile1>max1) { 
		                    max1=ile1;
		                    maxbin=bin; 
		   	              }
		}  
	}
	cout<<" Pkt 2.2. "<<ile;
	cout<<" Pkt 2.3. "<<maxbin;
}


