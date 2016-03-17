# Instrukcje po ściągnięciu repozytorium

## Jeżeli pracujemy na Windowsie potrzebujemy wsparcie do GIT'a:
* http://blog.end3r.com/119/git-latwy-system-kontroli-wersji/

## Formujemy sobie repozytorium do swojego githuba:
* https://help.github.com/articles/fork-a-repo/
* http://blog.end3r.com/142/github-kodowanie-spolecznosciowe/
* http://math.uni.lodz.pl/~skowroa/pz/pz03.html

## Korzystamy w projekcie z Composer:
* https://getcomposer.org/
* http://itcraftsman.pl/composer-czyli-jak-zarzadzac-zaleznosciami-w-php/

dlatego zaraz po ściągnięciu repozytorium na komputer musimy zinstalować zalezności w konsoli systemowej w folderze z plikami wykonujemy:
```bash
composer install
```
## Plik konfiguracyjny i wygenerowanie klucza kryptograficznego

Upewniamy się czy w folderze głownych projektu mamy plik `.env` z niego będa ładowane ustawienia aplikacji. Jeżeli nie mamy u siebie pliku ściągamy plik przykładowy z repozytorium laravela:
* https://raw.githubusercontent.com/laravel/laravel/master/.env.example
i zapisujemy plik u siebie jaki `.env`

W pliku konfiguracyjnym musimy mieć ustawiony klucz kryptograficzny, dlatego generujemy go za pomocą komendy w katalogu głownym:
```bash
php artisan key:generate
```

### Sprawdzamy:
* konfigurację serwera apache
* sprawdzamy czy nasz vhost dodaliśmy do pliku hosts
* uruchamiamy kod w przeglądarce w adresie na który wskazuje vhost

Zespół developerski PSAT:
===
1. Maciej Świderski
2. Bartosz Wojtyła
3. Cezary Praetendo  

