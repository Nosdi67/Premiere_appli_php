<?php 
    session_start();
    ob_start();
    $title="Accueil";
    require_once 'function.php';

?>


        <h1>Ajouter un produit</h1>
        <form action="traitement.php?action=add" method="post" enctype="multipart/form-data">
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
                <label for="image">Photo</label>
                <input type="file" name="image" id="image" accept="image/png, image/jpeg">
            </p>
            <p>
                <textarea name="description" id="description" cols="30" rows="4" placeholder="Description du produit"></textarea>  
            </p>
            <p>
                <input id="btn" class="btn btn-primary d-inline-flex align-items-center" type="submit" name="submit" value="Ajouter le produit">
            </p>
        </form>
    </div>
   

    
    
    <style>
        #error_message{
            color: #f5f5f5;
            width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            background-color: #dc3545;
            font-size: 1.5rem;
            text-align: center;
            
        }
        #success_message{
            color: #f5f5f5;
            width: 400px;
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            background-color: #0d6efd;
            font-size: 1.5rem;
            text-align: center;
            ;
        }
        
        form {
        display:flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        width: 500px;
        height: 700px;
        margin: auto;
        }
        p{
            display: flex;
            flex-direction: column;
        }
        nav{
            display : flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }
        h1{
            text-align: center;
        }
        input{
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
            border: none;
            outline: none;
            background-color: #f5f5f5;
        }
        textarea{
            border:none;
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            padding-left: 10px;
        }
    </style>

    <?php 
    $content=ob_get_clean();
    require_once 'template.php';
    ?>