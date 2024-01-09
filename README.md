# PHP-IXa_ESERCIZI
### Alcuni esercizi per continuare a prendere dimestichezza con PHP

### Eserc_Cookies
a) Realizzare un progetto PHP che generi un “cookie” con le seguenti caratteristiche:
- nome: “utente”;
- contenuto: “proprio cognome e nome”
- durata: 1 giorno

Al suo avvio deve verificare se il cookie è stato settato, ed in caso affermativo deve visualizzare:
- nome
- contenuto

Mentre se non risulta settato, deve visualizzare un messaggio del tipo:
- “Il cookie di nome ‘nome_cookie'” non è settato.

La pagina php, deve contenere una nota in cui si avvisa l’utente che, “potrebbe essere necessario ricaricare la pagina, per visualizzare il contenuto del cookie”.

Al <b>primo avvio</b> dello script:

<img src="readmeSrc\1.png" alt="1" width="50%" height="50%" style="margin: 1;">

Dopo il "<b>reloaded</b>", si dovrebbe visualizzare:

<img src="readmeSrc\2.png" alt="1" width="50%" height="50%" style="margin: 1;">

b) Realizzare un progetto PHP che generi una pagina web per l’autenticazione dell’utente (username e password) e memorizzi tali dati di “Login” in due distinti cookies, dei quali uno contenga <b>username</b> e l’altro la <b>password</b>.
<br>Richiedere all’utente, nel form di caricamento, se tali dati devono essere “ricordati”:
- in caso affermativo, i cookies devono avere durata 1 giorno,
- altrimenti devono scadere alla chiusura del browser.

Esempio di form per caricare username e password

<img src="readmeSrc\3.png" alt="1" width="50%" height="50%" style="margin: 1;">

Realizzare quindi uno script che, al rientro dell’utente con un nuovo accesso alla pagina:
- se i dati sono corretti lo saluti e lo avvii ad una nuova pagina "PaginaRiservata.php",
- in caso contrario, segnali che i dati non sono corretti e richieda nuovamente il login.
