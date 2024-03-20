<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif des produits</title>
</head>
<body>
    <nav>
    <a href="index.php" class="btn btn-primary d-inline-flex align-items-center">Accueil</a>
    </nav>
    <?php //Cette condition vérifie si le tableau $_SESSION['products'] n'est pas défini ou est vide avant d'ajouter un produit.
        if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
            echo "Vous n'avez ajouté aucun produit.";
        }
        else{
            
            echo
            "<table>",
            "<thead>",
                "<tr>",
                "<th>#</th>",
                "<th>Nom du produit</th>",
                "<th>Prix du produit</th>",
                "<th>Quantité</th>",
                "<th>Total</th>",
                "</tr>",
            "</thead>",
            "<tbody>";
            $totalGeneral=0;
            foreach($_SESSION['products'] as $key => $product){
                echo "<tr>",
                "<td>", $key, "</td>",
                "<td>", $product['name'], "</td>",
                "<td>", number_format($product['price'],2,",","&nbsp;"), "&nbsp","</td>",
                "<td>", $product['quantity'], "</td>",
                "<td>", number_format($product['total'],2,",","&nbsp;" ),"&nbsp","</td>",
                "</tr>";
                $totalGeneral+=$product['total'];
            }

            echo "<tr>",
            "<td colspan='4'>Total général</td>",//colspan='4' définit que cette cellule doit s'étendre sur 4 colonnes
            "<td><strong>", number_format($totalGeneral,2,",","&nbsp;"), "&nbsp","</strong></td>",
            "</tr>",
            "</tbody>",
            "</table>";
        }
        echo "<style>
                table {
                    margin:300px 700px;
                    border-radius: 20px;
                    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
                    width: 600px;
                    height: 500px;
                    text-align:justify;
                    padding:20px;
                }
                table th{
                    background-color: #4CAF50;
                    color: white;
                }
        
                 "
                
    ?>
</body>
</html>