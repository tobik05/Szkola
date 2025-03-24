#include <iostream>
#include <fstream>
using namespace std;

main()
{
	ifstream plik("mecz.txt");
    string napis;
  while (!plik.eof())
  {
  	plik>>napis;
  }
  int ile=0;
  for(int i=0;i<10000-1;i++) if(napis[i]!=napis[i+1]) ile++;
  cout<<" PKT 1: "<<ile;
  
}


