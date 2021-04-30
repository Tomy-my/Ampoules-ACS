<?php

$titre = "Home";   //Je nomme le titre de la page

include('header.php');  //J'ammène la page header

?>

<div class="container_form">
    <div class="add_form">
        <div class="bandeau">
            <h1>Ajout d'ampoule</h1>
        </div>
        <div class="int">
            <div class="gauche">
                <form class="add" method="POST" onsubmit="return sendData();">
                    
                    <h1 id="titre">Précisez la date d'ajout de l'ampoule</h1>
                    <input class="date" type="date" id="date" name="date" value="2021-04-28">
                    
                    <h1 id="titre_sp">Indiqué l'étage</h1>
                    <div class='ctrl'>
                        <div class='ctrl__button ctrl__button--decrement'>&ndash;</div>
                        <div class='ctrl__counter'>
                            <input class='ctrl__counter-input' name="upstairs" id="upstairs" maxlength='10' type='text' value='0'>
                            <div class='ctrl__counter-num'>0</div>
                        </div>
                        <div class='ctrl__button ctrl__button--increment'>+</div>
                    </div>
                    
                    <h1 id="titre_sp">Où se situe l'ampoule ?</h1>
                    <div class="select">
                        <select  id="position" name="position">
                            <option selected disabled>Veuillez choisir une option</option>
                            <option value="Left">Côté Gauche</option>
                            <option value="Right">Côté Droit</option>
                            <option value="Middle">Au Millieu</option>
                            <option value="Back">Au Fond</option>
                        </select>
                    </div>
                    
                    <h1 id="titre">Définissait le prix</h1>
                    <input class="prix" type="text" onkeypress="return verif(event);" name="price" id="price" placeholder="€">           
            </div>
            <div class="droite">
                <div class="amp">
                    <i class="far fa-lightbulb"></i>
                    <button class="send" onclick="myFunction()">Allumer !</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <div class="mod_form">
        <div class="bandeau">
            <h1>Modification d'ampoule &nbsp<i class="far fa-lightbulb"></i></h1>
        </div>
    </div>
</div>

<div id="res" ></div>
<div id="snackbar">Ajout d'ampoule réussi</div>

<?php
include('footer.php');
?>
