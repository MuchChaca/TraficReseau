<!-- Trafic global -->
<html>
    <head>
        <title>Trafic observé</title>        
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <header>
            <h1>Trafic observé</h1>
            <hr><br /><br />
        </header>
        <center>
        <?php
            // Ouverture de connexion.txt dans $fichier
            $fichier=file('connexion.txt');
            // Création du tableau HTML
            echo'<table border="1" cellpadding="5">';
                //Première ligne du tableau HTML avec le nom des colones
                echo '<tr>';
                    echo '<th><center>Adresse du poste</center></th>';
                    echo '<th><center>Protocole</center></th>';
                    echo '<th><center>Nombre de paquets</center></th>';
                echo '</tr>';
                //Création du contenu du tableau HTMl avec un tableau php à une ligne et trois colones dans une boucle foreach
                //Ligne après ligne, cela constitu un tableau complet
                foreach($fichier as $line){
                    $array = explode(';', $line);
                    echo '<tr>';
                        echo '<td>'.$array[0].'</td>';
                        echo '<td>'.$array[1].'</td>';
                        echo '<td>'.$array[2].'</td>';
                    echo '</tr>';
                }
            echo '</table>';
            
        ?>
        </center>
    </body>
</html>