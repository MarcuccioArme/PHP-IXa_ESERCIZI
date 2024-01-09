<?php

    $usernameCorretto = "utente";
    $passwordCorretta = "1234";

    if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {

        $username = $_COOKIE["username"];
        $password = $_COOKIE["password"];

        if ($username == $usernameCorretto && $password == $passwordCorretta) {

            echo "<h2>Ciao, $username! Sei autenticato.</h2>";

        }

    } else {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $username = $_POST["username"];
            $password = $_POST["password"];
    
            if ($username == $usernameCorretto && $password == $passwordCorretta) {
    
                if (isset($_POST["ricordami"]) && $_POST["ricordami"] == 'on') {

                    setcookie('username', $username, time() + 86400, "/");
                    setcookie('password', $password, time() + 86400, "/");

                } else {

                    setcookie('username', $username, time() - 86400, "/");
                    setcookie('password', $password, time() - 86400, "/");

                }

            } else {

                echo "<h4>Username o Password non corretta</h4> <br><br>";
                echo '<a href="Login.html"><button>Rifai il login</button></a>';

            }
    
        } else {

            echo "<h4>Sessione scaduta.</h4> <br><br>";
            echo '<a href="Login.html"><button>Rifai il login</button></a>';

        }

    }

?>