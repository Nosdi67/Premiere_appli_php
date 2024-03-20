<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout produit</title>
</head>
<body>
    <div id="wrapper">
    <nav>
        <a href="index.php" class="btn btn-primary d-inline-flex align-items-center">Accueil</a>
        <a href="recap.php" class="btn btn-primary d-inline-flex align-items-center">Panier</a>
    </nav>
    <h1>Ajouter un produit</h1>
        <form action="traitement.php" method="post">
            <p>
                <label for="nom">Nom du produit</label>
                <input type="text" name="nom" id="nom">
            </p>
            <p>
                <label for="prix">Prix du produit</label>
                <input type="number" name="prix" id="prix">
            </p>
            <p>	
                <label for="quantite">Quantité</label>
                <input type="number" name="quantite" id="quantite">
            </p>
            <p>
                <input id="btn" class="btn btn-primary d-inline-flex align-items-center" type="submit" name="submit" value="Ajouter le produit">
        </form>
    </div>
</body>
</html>