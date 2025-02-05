# ProgettoTest - Laravel Brewery App

Questa applicazione è un progetto Laravel che permette agli utenti di autenticarsi e ottenere una lista di birrifici recuperata dall'API OpenBreweryDB. Il sistema utilizza un'API proxy per autenticare le richieste e proteggere l'accesso ai dati.

## Installazione

### 1. Clonare il repository

Aprire il terminale e clonare il repository:

````bash
git clone https://github.com/bnistor4/ProgettoTest.git
cd ProgettoTest

### 2. Installare le dipendenze
```bash
composer install
npm install 
````

### 3. Creare il file .env

```bash
Copia il file .env.example e rinominalo in .env
```

### 4. Generare la chiave dell'applicazione

```bash
php artisan key:generate
```

### 5. Configurare il database

```bash
Ho usato un db locale database.sqlite messo in database/database.sqlite
```

### 6. Eseguire le migrazioni

```bash
php artisan migrate
```


### 7. Avviare il server

```bash
php artisan serve
```

