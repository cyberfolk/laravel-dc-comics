# DC Comics - Replica web-site

**Initial commit**: 07/05/23

**Tecnologie:** Laravel, PHP, Blade, MySql, Javascript, HTML, CSS e Bootstrap.

🦸🏻‍♂️ DC Comics! Un progetto che ci ha accompagnato durante il percorso di Boolean, di volta in volta veniva aggiornato con le tecnologia apprese a lezione, questa è l'ultima versione In questo esercizio abbiamo implementato le CRUD (create/read/update/delete) per gestire la persistenza dei Fumetti nel Database poi tramite le rotte e il PageControler abbiamo gestito la navigazione tra le varie pagine del sito. Per finire con il template Blade ho potuto popolare il codice html in modo dinamico.

🔗 Repository:
https://github.com/cyberfolk/laravel-dc-comics

## Pages Preview
<div>
  <img src="./public/screencapture-1.png" width="32%" style="margin: 4px;"/>
  <img src="./public/screencapture-4.png" width="32%" style="margin: 4px;"/>
  <img src="./public/screencapture-2.png" width="32%" style="margin: 4px;"/>
</div>

## Milestone
- [x] Creare un progetto Laravel 9 per gestire un archivio di fumetti.
- [x] Creare [app.blade.php](resources/views/layouts/app.blade.php) un file di layout in cui inserire la struttura comune di tutte le pagine del sito web
- [x] Strutturare il layout tramite partials.
- [x] Aggiungere più pagine che condividono lo stesso layout
- [x] Creare la rotta `comics` per visualizzare la lista di tutti i fumetti
- [x] Recuperare i fumetti dal file [comics.php](config/comics.php) inserito nella cartella config
- [x] Riciclare il template Sass dall'esercizio [vite-comics](https://github.com/cyberfolk/vite-comics).
- [x] Tramite gli appositi comandi artisan creare un model con relativa migration e un resource-controller.
- [x] Definire le operazioni CRUD con le relative view: `index()`, `show()`, `create()` e `store()`
- [x] Creare il seeder per la tabella **Comics** utilizzando il file in [comics.php](config/comics.php).
- [x] Tramite javascript, quando l'utente clicca sul pulsante "delete", chiedere conferma della cancellazione, prima di eliminare l'elemento.
- [x] Validare gli input ricevuti in fase di creazione e modifica, rispondendo con errori chiari e in italiano.
- [x] Utilizzare le Request personalizzate per validare i dati

## Admin-page
<img src="./public/screencapture-3.png"/>

