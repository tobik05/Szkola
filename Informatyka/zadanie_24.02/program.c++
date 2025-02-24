#include <iostream>
#include <fstream>
#include <cmath>
using namespace std;



main(){
    float liczby, ile_kwadratow=0, pierwsza_liczba;
    ifstream plik("liczby.txt");
    ofstream plik2("wynik3.txt");
    //petla wczytujaca i zapisujaca linijka po linicje z pliku i do pliku
    for(int i=1;i<=2000;i++)
	{
        //wczytanie liczb z pliku do zmiennej 'liczby'
		plik>>liczby;
        //sprawdzanie czy pierwiastek z liczby jest liczba calkowita
        if(int(sqrt(liczby))-sqrt(liczby)==0){
            ile_kwadratow++;
            //zapisanie pierwszej liczby ktora spelnia warunek
            if(ile_kwadratow==1){
                pierwsza_liczba=liczby;
            }
        }
    }
    plik2.close();
    cout<<"\n[*] Pierwsza liczba "<<pierwsza_liczba;
    cout<<"\n[*] Liczba liczb, ktore sa kwadratwami liczb calkowitych to: "<<ile_kwadratow;
    cout<<"\n[*] Gotowe - utworzono plik wynik3.txt.";
}
//sqrt funkcja do liczenia kwadratu