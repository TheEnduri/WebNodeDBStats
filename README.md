Repozytorium zawiera automatyczną konfiguracje dla infrastury składającej się z 3 serwerów.
Pierwszy serwer na, którym zostanie zainstalowany:
    - Apache
    - Wordpress (Wraz z niezbędnymi elementami) [ Możliwością edycji niektórych parametrów ]
    - Telegraf
    
Drugi serwer będzie służył jako baza danych dla reszty serwerów
    - Zainstalowane zostaną dwie bazy danych
    - InfluxDB, potrzebny do danych spływających z telegrafa z 3 serwerów
    - MySQL DB, potrzebny do konfiguracji Wordpressa
    
Trzeci serwer, gdzie zostanie zainstalowana Grafana, niezbędna do przedstawiania graficznie danych z telegrafów

Telegraf pobiera dane z serwerów na temat:
    - Użycie procesora
    - Użycie pamięci
    - Użycie dysku
