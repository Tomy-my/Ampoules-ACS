<?php

$titre = "Home";   //Je nomme le titre de la page

include('header.php');  //J'ammène la page header
?>


<div class="container_form">
    <div class="add_form">
        <div class="bandeau">
            <h1>Ajout d'ampoule &nbsp<i class="far fa-lightbulb"></i></h1>
        </div>
        <form class="connexion" action="controller/formulaire.php" method="post">
            <input type="date" id="start" name="date_lekki"
                   value="2021-04-28"
                   min="2021-01-01" max="2030-12-31">
			<hr>
            <input class="etage" type="text" name="upstairs" placeholder="L'étage ou se trouve l'ampoule">
			<hr>
            <select name="position" id=select_position">
                <option value="">Veuillez choisir une option</option>
                <option value="Left">Côté Gauche</option>
                <option value="Right">Côté Droit</option>
                <option value="Middle">Au Millieu</option>
                <option value="Back">Au Fond</option>
            </select>
			<hr>
            <input class="prix" type="text" name="price" placeholder="Prix de l'ampoule">
			<hr>
			<button class="send">Envoyer !</button>
		</form>
    </div>

    <div class="mod_form">
        <div class="bandeau">
            <h1>Modification d'ampoule &nbsp<i class="far fa-lightbulb"></i></h1>
        </div>
    </div>
</div>