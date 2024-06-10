# laravel-gdr

Creiamo un nuovo progetto Laravel per gestire i personaggi di un Gioco di Ruolo. <br />
Questo progetto rappresenta il back-end del sito.

## Configurazione e avvio 

Copia il file `.env.example` e nominalo `.env`. Aggiungi queste righe: 

```
DB_DATABASE=laravel_gdr
DB_USERNAME=root
DB_PASSWORD=root
```
<br />

Apri il terminale di VSCode e scrivi:

```
npm i 
```
(Devi prima aver installato node.js) <br /><br />

```
composer i
```
(Devi prima aver installato composer) <br /><br />

```
php artisan migrate
```
Conferma la creazione del database `laravel_gdr` <br /><br />

```
php artisan db:seed
```
<br />

```
npm run dev
```
<br />

```
php artisan serve
```
Apri la pagina all'indirizzo suggerito, ad esempio http://127.0.0.1:8000/

<br />

Una volta aperta la pagina cliccare su GENERATE APP KEY oppure sul terminale di VSCode scrivi:

```
php artisan key:generate
```
<br />

Sul menu clicca su `Register` e crea un nuovo utente

Ora puoi navigare nel sito