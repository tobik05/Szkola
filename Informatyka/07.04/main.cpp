#include <iostream>
#include <fstream>

using namespace std;

int main(){
    int liczba;
    cin>>liczba;
    string bin;
    while (liczba>0){
        if(liczba%2==0){
            bin="0"+bin;
        }else{
            bin="1"+bin;
        }
        liczba=liczba/2;
    }
    cout<<bin;
}