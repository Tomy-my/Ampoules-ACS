<?php

$titre = "Home";   //Je nomme le titre de la page

include('header.php');  //J'ammène la page header
?>


<div class="container_form">
    <div class="add_form">
        <div class="bandeau">
            <h1>Ajout d'ampoule &nbsp<i class="far fa-lightbulb"></i></h1>
        </div>
        <form class="add" action="controller/formulaire.php" method="post">
            
            <h1 id="titre">Précisez la date d'ajout de l'ampoule</h1>
            <input class="date" type="date" id="start" name="date_lekki" value="2021-04-28" min="2021-01-01" max="2030-12-31">
            
            <h1 id="titre_sp">Indiqué l'étage</h1>
            <div class='ctrl'>
                <div class='ctrl__button ctrl__button--decrement'>&ndash;</div>
                <div class='ctrl__counter'>
                    <input class='ctrl__counter-input' name="upstairs" maxlength='10' type='text' value='0'>
                    <div class='ctrl__counter-num'>0</div>
                </div>
                <div class='ctrl__button ctrl__button--increment'>+</div>
            </div>
            
            <h1 id="titre_sp">Où se situe l'ampoule ?</h1>
            <div class="select">
                <select  id="slct" name="position">
                    <option selected disabled>Veuillez choisir une option</option>
                    <option value="Left">Côté Gauche</option>
                    <option value="Right">Côté Droit</option>
                    <option value="Middle">Au Millieu</option>
                    <option value="Back">Au Fond</option>
                </select>
            </div>
            
            <h1 id="titre">Définissait le prix</h1>
            <input class="prix" type="text" onkeypress="return verif(event);" name="price" placeholder="€">
			
            <button class="send">Envoyer !</button>
		</form>
    </div>

    <div class="mod_form">
        <div class="bandeau">
            <h1>Modification d'ampoule &nbsp<i class="far fa-lightbulb"></i></h1>
        </div>
    </div>
</div>



<script type="text/javascript" src="js/script.js"></script>