<?php
session_start();

if(isset($_POST['submit'])) {//$_post c'est une superglobale qui contient les données envoyées en POST
                            //$_get c'est une superglobale qui contient les données envoyées en GET
    //la differnece entre get et post c'est que get transmet les données dans l'url alors que post ne les affiche pas dans l'url
    $name=filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);//filtre pour eviter de mettre du code dans le nom
    $price=filter_input(INPUT_POST, "prix", FILTER_VALIDATE_FLOAT,FILTER_FLAG_ALLOW_FRACTION);//filtre pour eviter les chaines de caractères dans le prix, auf point et virgule
}   $qtt=filter_input(INPUT_POST, "quantite", FILTER_VALIDATE_INT);//filtre pour eviter les chaines de caractères dans la quantité

    if($name && $price && $qtt){ //si le nom l'age et la quantités sont valide,

        $product = [
            "name" => $name,
            "price" => $price,
            "quantity" => $qtt,
            "total" => $price * $qtt
        ];
        $_SESSION['products'][] = $product;//$_session c'est une superglobale qui permet de stocker des données côté serveur entre plusieurs requêtes HTTP
    }   //dans cette session on stocke un tableau de produits
        //[] signifie qu'on ajoute le $produit saisie a la fin du tableau

header("Location:index.php");//redirection vers la page index.php
?>