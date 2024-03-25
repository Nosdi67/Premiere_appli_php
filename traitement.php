<?php


session_start();


if(isset($_GET['action'])){
    switch($_GET['action']){
        // ajouter un produit
        case "add": 
            if(isset($_POST['submit'])) {//$_post c'est une superglobale qui contient les données envoyées en POST
                //$_get c'est une superglobale qui contient les données envoyées en GET
                //la differnece entre get et post c'est que get transmet les données dans l'url alors que post ne les affiche pas dans l'url

                $name=filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);//filtre pour eviter de mettre du code dans le nom
                $price=filter_input(INPUT_POST, "prix", FILTER_VALIDATE_FLOAT,FILTER_FLAG_ALLOW_FRACTION);//filtre pour eviter les chaines de caractères dans le prix, auf point et virgule
                $qtt=filter_input(INPUT_POST, "quantite", FILTER_VALIDATE_INT);//filtre pour eviter les chaines de caractères dans la quantité  

                if($name && $price && $qtt){ //si le nom l'age et la quantités sont valide,

                    $product = [
                    "id"=>uniqid(),
                    "name" => $name,
                    "price" => $price,
                    "quantity" => $qtt,
                    "total" => $price * $qtt
                    ];
                    $_SESSION['products'][] = $product;//$_session c'est une superglobale qui permet de stocker des données côté serveur entre plusieurs requêtes HTTP
                                                    //dans cette session on stocke un tableau de produits
                                                    //[] signifie qu'on ajoute le $produit saisie a la fin du tableau
                    echo $_SESSION['success_message'] = 'Le produit a bien été ajouté.';
                    header("Location:index.php"); exit;//redirection vers la page index.php
                }else{
                    echo $_SESSION['error_message'] = 'Veuillez remplir le formulaire correctement.';
                    header("Location:index.php"); exit;
                } 
            
            }           
                            break;
            
                    // supprimer un produit
                    case "deleteProductLine":
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            foreach($_SESSION['products'] as $key => $product){
                                if($product['id'] == $id){
                                    unset($_SESSION['products'][$key]);
                                    break;
                                }
                                
                            }
                            echo $_SESSION['delete_message'] = 'Le produit a bien été supprimé.';
                            header("Location: recap.php");
                            exit;
                        }
                            break;
    
        
                    // vider le panier
                    case "clear":
                        unset($_SESSION["products"]);
                            header("Location: recap.php"); exit;
            
                            break;
                    // augmenter la quantité
                        case "up":
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
                            foreach($_SESSION['products'] as $key => $product){
                                if($product['id']==$id){
                                    $_SESSION['products'][$key]['quantity']++;
                                    $_SESSION['products'][$key]['total']=$_SESSION['products'][$key]['price']*$_SESSION['products'][$key]['quantity'];
                                    break;
                                }
                            }
                            header("Location:recap.php");
                            exit;
                        }
                        break;
        
            // diminuer la quantité
            case "down":
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                       foreach($_SESSION['products'] as $key => $product){
                           if($product['id'] == $id){
                            $_SESSION['products'][$key]['quantity']--;
                            if($_SESSION['products'][$key]['quantity'] == 0){
                               unset($_SESSION['products'][$key]);
                            }
                            else{$_SESSION['products'][$key]['total']=$_SESSION['products'][$key]['total']-$_SESSION['products'][$key]['price'];
                            }
                            
                            break;
                        }
                    }
                            header("Location:recap.php");
                            exit;
                }
                             break;
    }
}

?>;