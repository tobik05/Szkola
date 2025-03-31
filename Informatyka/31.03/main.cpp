#include <iostream>
#include <fstream>
#include <cmath>

using namespace std;

int main() {
    int a[10000];
    ifstream plik("pi_przyklad.txt");
    int i=0;
    for(int i=0; i<10000; i++){
        plik>>a[i];
    }
    int licznik=0;
    for(int i=0;i<10000-1;i++){
        if(((a[i]*10)+a[i+1])>90){
            licznik++;
        }
    }
    cout<<licznik<<endl;
}

