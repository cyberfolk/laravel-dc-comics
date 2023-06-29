# DC Comics - Replica web-site

**Initial commit**: 07/05/23

**Tecnologie:** Laravel, PHP, Blade, MySql, Javascript, HTML, CSS e Bootstrap.

🦸🏻‍♂️ DC Comics! Un progetto che ci ha accompagnato durante il percorso di Boolean, di volta in volta veniva aggiornato con le tecnologia apprese a lezione, questa è l'ultima versione In questo esercizio abbiamo implementato le CRUD (create/read/update/delete) per gestire la persistenza dei Fumetti nel Database poi tramite le rotte e il PageControler abbiamo gestito la navigazione tra le varie pagine del sito. Per finire con il template Blade ho potuto popolare il codice html in modo dinamico.

🔗 Repository:
https://github.com/cyberfolk/laravel-dc-comics

## Milestone

-   Creare un progetto Laravel 9 per gestire un archivio di fumetti.
-   Ceate [app.blade.php](resources/views/layouts/app.blade.php) un file di layout in cui inserire la struttura comune di tutte le pagine del sito web
-   Strutturare il layout tramite partials.
-   Aggiungere più pagine che condividono lo stesso layout
-   Creare una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.
-   Tramite gli appositi comandi artisan creare un model con relativa migration e un resource-controller.
-   Definire le operazioni CRUD con le relative view:

    -   index()
    -   show()
    -   create()
    -   store()

-   Creare il seeder per la tabella **Comics** utilizzando il file in [comics.php](config/comics.php).
-   Tramite javascript, quando l'utente clicca sul pulsante "delete", chiedere conferma della cancellazione, prima di eliminare l'elemento.
-   Validare gli input ricevuti in fase di creazione e modifica, rispondendo con errori chiari e in italiano.
-   Utilizzare le Request personalizzate per validare i dati
