#include <iostream>
#include <fstream>
#include <string>
using namespace std;
bool czy_pierwsza(int x)
{
	if(x<2){
        return false; 
    }
	for(int i=2;i*i<=x;i++){
        if(x%i==0){
            return false; 
        }
    }
	return true;
}
int main() {
    fstream plik("liczby_przyklad.txt");
    ofstream plik2("wynik3_przyklad.txt");
    int liczba[1000][3];
    int wiersz = 0;

    while (plik && wiersz < 1000) {
        for (int kolumna = 0; kolumna < 3; ++kolumna) {
            plik >> liczba[wiersz][kolumna];
        }
        ++wiersz;
    }

    plik.close();

    /*for (int i = 0; i < wiersz-1; ++i) {
        for (int j = 0; j < 3; ++j) {
            if(czy_pierwsza(liczba[i][j])){
                licznik_czy_pierwsza++;
            }
        }
    }*/

    //Zadanie 3.3
    int licznik_czy_pierwsza=0;
    for (int i = 0; i < wiersz-1; ++i) {
        if(czy_pierwsza(liczba[i][0])){
            licznik_czy_pierwsza++;
        }
    }

    //Zadanie 3.4
    int licznik_czy_pierwsza_2=0;
    for (int i = 0; i < wiersz-1; ++i) {
        for (int j = 0; j < 2; ++j) {
            if(czy_pierwsza(liczba[i][j])){
                licznik_czy_pierwsza_2++;
            }
        }
    }

    plik2<<"3.3: "<<licznik_czy_pierwsza<<endl;
    plik2<<"3.4: "<<licznik_czy_pierwsza_2<<endl;
    plik2.close();
}