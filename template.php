
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <div id="wrapper">
        <nav>
            <a href="index.php" class="btn btn-primary d-inline-flex align-items-center">Accueil</a>
            <a href="recap.php" class="btn btn-primary d-inline-flex align-items-center">Panier<span><?php if(isset($countProducts) && $countProducts != 0) { echo $countProducts; } ?></span></a>
        </nav>

    <?php if(isset($content)) { echo $content; } ?>
    <?php if(isset($recapContent)) { echo $recapContent; } ?>
      
    
    </div>
</body>
</html>

<style>
    span{
        display: inline-block;
        padding: 0.25em 0.4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.25rem;
        background-color: #17a2b8;
        color: #fff;
    }
</style>



