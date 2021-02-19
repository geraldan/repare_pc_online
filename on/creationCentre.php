<?php
//sans cette ligne de code qui demare le $_SESSION le $_SESSION ne marche pas
session_start();
// verifie si l'admin est connecté
if(isset($_SESSION["connected"]) && $_SESSION["connected"] == "yes") {
    // si $_post existe execute le code
    if(isset($_POST['nom'])) {

        //connection a la basse de donné façon simplifier en faisant une feuille separer pour ce conetcter a la basse de donnee ici nommé pdo.php et 'require' pour apeler la page ceci est une fonction
        require ("../pdo.php");
        $pdo = (new Connection())->pdo();

        $name = $_POST['nom'];
        $adr = $_POST['adresse'];
        $lon = $_POST['lon'];
        $lat = $_POST['lat'];

        // inserer dans la table
        $sql = " INSERT INTO centres (nom, adresse, lon, lat )
        VALUES
        ('$name', '$adr', '$lon', '$lat')";

        //execution de la requete
        $pdo->exec($sql);
    }

    ?>

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Création</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
         <!-- ne pas oublier le post dans method du formulaire le post permer d'envoyer  en cacher les donnés dans la base de donner -->
            <div class="form_on_creation">
                <h4>Création de centres</h4>
                <form id="form" action="" method="POST">
                    <div class="col-md-6 form-group">  
                        <input class="form-control-on" name="nom" type="text" placeholder="Centre" required>
                    </div>
                    <div>
                        <input class="form-control-on" name="adresse" type="text" placeholder="Adresse" required>
                    </div>
                    <div>
                        <input class="form-control-on" name="lon" type="text" placeholder="Longitude" required>
                    </div>
                    <div>
                        <input class="form-control-on" name="lat" type="text" placeholder="Latitude" required>
                    </div>

                    <div><button class="btn-on" type="submit">ENVOYER</button></div>

                </form>
            </div>
    </body>
    </html>
<?php } else { header("HTTP/1.1 403 Forbidden"); } ?>