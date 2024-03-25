<?php
session_start();
ob_start();
$title="Recapitulatif";
require_once 'function.php'
?>
  
     <!-- //Cette condition vérifie si le tableau $_SESSION['products'] n'est pas défini ou est vide avant d'ajouter un produit. -->
     <?php if(!isset($_SESSION['products']) || empty($_SESSION['products'])){?>
        <div id="message_vide">
            <div><?php echo "Aucun produit dans le panier"  ?></div>
        </div> 
    
    <?php }
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
                "<td>","<a href='traitement.php?action=deleteProductLine&id=", $product['id'],"'><i class='fa-solid fa-trash'></i></a>", $key, "</td>",
                "<td>", $product['name'], "</td>",
                "<td>", number_format($product['price'],2,",","&nbsp;"), "&nbsp","</td>",
                "<td>","<a href='traitement.php?action=down&id=", $product['id'],"'>-</a>", $product['quantity'],"<a href='traitement.php?action=up&id=", $product['id'],"'>+</a>","</td>",
                "<td>", number_format($product['total'],2,",","&nbsp;" ),"&nbsp","</td>",
                "</tr>";
                $totalGeneral+=$product['total'];
        } 


            echo "<tr>",
            "<td colspan='4'>Total général</td>",//colspan='4' définit que cette cellule doit s'étendre sur 4 colonnes
            "<td><strong>", number_format($totalGeneral,2,",","&nbsp;"), "&nbsp","</strong></td>",
            "</tr>",
            "<tr class='boutons'>",
            "<td><a href='traitement.php?action=clear'>Vider le panier</a></td>",
            "<td><a>Payer</a></td>",
            "</tbody>",
            "</table>";
        }
        
        
        
        echo "<style>
                table {
                    margin:auto;
                    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
                    width: 500px;
                    height: 500px;
                    text-align:justify;
                    padding:10px;
                }
                table th{
                    background-color: #0d6efd;
                    color: white;
                    border-radius: 10px;
                    text-align:center;
                }
                nav{
                    display : flex;
                    justify-content: center;
                    align-items: center;
                }
                a{
                    border-radius: 10px;
                    padding: 10px;
                    margin: 10px;
                    text-decoration: none;
                    color: white;
                    background-color: #0d6efd;
                    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0,
                    0, 0.09) 0px -3px 5px;
                    transition: 0.3s;
                    cursor: pointer;
                    font-size: 1.1em;
                    font-weight: bold;
                    border: none;
                    outline: none;
                    text-align: justify;
                }
                td a{
                    max-height: 30px;
                    max-width: 30px;
                    font-size: 11px;
                }
               .boutons{
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;
                    width:200px;
                }",
               "</style>"; 
              

$recapContent=ob_get_clean();
require_once 'template.php';
?>

<style>
    #message_vide{
        padding: 50px 100px;
        color: black;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 400px;
        border-radius: 20px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px;
        text-align: center;
    }
    #delete_message{
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
</style>