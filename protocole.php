<!-- Trafic par protocole -->
<html>
    <head>
        <title>Trafic par protocole</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <header>
            <h1>Trafic total par protocole</h1>
            <hr><br /><br />
        </header>
        
        <center>
        <?php
                // Ouverture de connexion.txt dans $fichier
            $fichier=file('connexion.txt');
            $file=fopen('connexion.txt','r');
            $ligne=fgetcsv($file,132,';');
            fclose($file);
            
                //Tableau
            echo'<table border="1" cellpadding="5">';
                echo '<tr>';
                    echo '<th><center>Protocole</center></th>';
                    echo '<th><center>Nombre de paquets</center></th>';
                echo '</tr>';
                //Initialisation des valeur du tableau à 0 pour ne pas créer d'erreurs
                foreach($fichier as $line){
                    $array = explode (';', $line);
                    $tab[$array[1]]=0;
                }
                foreach($fichier as $line){
                    $array = explode(';', $line);
                    $tab[$array[1]]=$tab[$array[1]]+$array[2];
                }
           
            foreach($tab as $ind=>$cont){
                echo '<tr>';
                    echo '<td>'.$ind.'</td>';
                    echo'<td>'.$cont.'</td>';
                echo '</tr>';
               
            }
            echo '</table>';
        ?>
        </center>
    </body>
</html>