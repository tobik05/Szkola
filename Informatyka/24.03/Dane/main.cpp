#include <iostream>
#include <fstream>
#include <cmath>

using namespace std;
bool droga(long a, long b){
    while (b>a){
        b/=2;
    }
    return a==b;
    
}

int main() {
    long a, b;
    ifstream plik("pary.txt");
    while(!plik.eof()){
        plik>>a>>b;
        if(droga(a,b)){
            cout<<a<<" "<<b<<endl;
        }
    }
}

