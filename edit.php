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
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Étages</th>
                        <th>Positions</th>
                        <th>Prix</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <?php while ($data = $reponse->fetch()){ ?> <!-- Début de la boucle -->
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    <tr>
                        <td><?php echo $data['date'] ?></td>
                        <td><?php echo $data['upstairs'] ?></td>
                        <td><?php echo $data['position'] ?></td>
                        <td><?php echo $data['price'] ?></td>
                    </tr>
                    </tbody>
                </table>
                <?php
                }     // On ferme la boucle
                $reponse->closeCursor(); //Permet de terminer le traitemant de la requette SQL 
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>