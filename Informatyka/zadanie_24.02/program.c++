#include <iostream>
#include <fstream>
#include <cmath>
using namespace std;



main(){
    float liczba, ile_kwadratow=0, pierwsza_liczba;
    ifstream plik("liczby_przyklad.txt");
    ofstream plik2("wynik3_przyklad.txt");
    //petla wczytujaca i zapisujaca linijka po linicje z pliku i do pliku
    for(int i=1;i<=100;i++)
	{
        //wczytanie liczb z pliku do zmiennej 'liczba'
		plik>>liczba;
        //sprawdzanie czy pierwiastek z liczby jest liczba calkowita
        if(int(sqrt(liczba))-sqrt(liczba)==0){
            ile_kwadratow++;
            //zapisanie pierwsze liczby ktora spelnia warunek
            if(ile_kwadratow==1){
                pierwsza_liczba=liczba;
            }
        }
    }
    plik2<<"Zadanie 3.1{";
    plik2<<"\n  [*] Pierwsza liczba: "<<pierwsza_liczba;
    plik2<<"\n  [*] Liczba liczb, ktore sa kwadratwami liczb calkowitych to: "<<ile_kwadratow;
    plik2<<"\n}";

    plik2<<"Zadanie 3.2{";
    for(int i=1;i<= 100;i++)
	{
        //wczytanie liczb z pliku do zmiennej 'liczba'
		plik>>liczba;
        //sprawdzanie ilosci dzielnikow liczby
        int liczba_dzielnikow=0;
        for (int i=1; i<=liczba; i++)
        {
            if(int(liczba)%i==0){
                liczba_dzielnikow++;
            }
            if(liczba_dzielnikow==5){
                plik2<<"\n  "<<liczba;
            }
        }
    }
    plik2<<"\n}";

    plik2.close();
    cout<<"\n[*] Gotowe - utworzono plik wynik3.txt.";
}
//sqrt funkcja do liczenia kwadratu