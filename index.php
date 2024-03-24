<?php 
    session_start();
    ob_start();
    $title="Accueil";
?>

        
        <h1>Ajouter un produit</h1>
        <form action="traitement.php?action=add" method="post">
            <p>
                <label for="nom">Nom du produit</label>
                <input type="text" name="nom" id="nom">
            </p>
            <p>
                <label for="prix">Prix du produit</label>
                <input type="number" min="0" name="prix" id="prix">
            </p>
            <p>	
                <label for="quantite">Quantité</label>
                <input type="number" min="1" name="quantite" id="quantite">
            </p>
            <p>
                <input id="btn" class="btn btn-primary d-inline-flex align-items-center" type="submit" name="submit" value="Ajouter le produit">
        </form>
    </div>

    <?php
    $countProducts=0;
    if(isset($_SESSION['products']) && is_array($_SESSION['products'])) {
        $countProducts = count($_SESSION['products']);
    }
    
    echo $countProducts; 

    $content=ob_get_clean();
    require_once 'template.php';
    ?>