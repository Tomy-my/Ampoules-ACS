<?php

$titre = "Historique";   //Je nomme le titre de la page

include('header.php');  //J'ammène la page header

include('controller/formulaire.php');

$reponse = $bdd->query('SELECT * FROM data ORDER BY date DESC');  //Requette SQL qui dit affiche tout de la base DATA par date d'ajout la plus récente
?>

<div id="history">
    <div class="container_form">
        <div class="history_container">
            <div class="bandeau">
                <h1>Historique</h1>
            </div>
            <div class="haut_tableau">
                <div class="colonne">Dates</div>
                <div class="colonne">Étages</div>
                <div class="colonne">Positions</div>
                <div class="colonne">Prix</div>
            </div>
            <table>
                <?php while ($data = $reponse->fetch()){ ?> <!-- Début de la boucle -->
                <tr>
                    <td id="a_date"><?php echo $data['date'] ?></td>
                    <td id="a_upstairs"><?php echo $data['upstairs'] ?></td>
                    <td id="a_position"><?php echo $data['position'] ?></td>
                    <td id="a_price"><?php echo $data['price'] ?></td>
                </tr>
                <?php
                }     // On ferme la boucle
                $reponse->closeCursor(); //Permet de terminer le traitemant de la requette SQL 
                ?>
            </table>
        </div>
    </div>
</div>