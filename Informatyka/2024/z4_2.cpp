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
	
	int ile=0;
	
    for(int i=0;i<3000;i++)
      for(int j=0;j<20;j++) if(liczby2[j]%liczby1[i]==0) {
                                                              ile++;
                                                              break;
                                                           }
     //sortowanie
	 
	 for(int i=0;i<3000;i++) 
	  for(int j=0;j<3000-1;j++) if(liczby1[j]<liczby1[j+1]) swap(liczby1[j],liczby1[j+1]);
      
      
            
      cout<<" ZAD 1: "<<ile;
      
      cout<<" 101 liczba to: "<<liczby1[100];
	
	
	
}
