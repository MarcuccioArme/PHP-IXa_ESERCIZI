<?php

    setcookie('utente', 'Marco Armenise', time() + 86400);

    if (isset($_COOKIE['utente'])) {

        echo "Il Cookie di nome 'utente' e' settato! <br>";
        echo "Il suo valore e': ";
        echo ($_COOKIE["utente"]);

    } else {
        echo "Il Cookie di nome 'utente' non risulta ancora settato!";
    }

    echo "<br><br><b>Nota:</b> Potrebbe essere necessario ricaricare la pagina, per visualizzare il contenuto dei Cookie."

?>