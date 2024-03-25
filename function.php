<?php

$countProducts=0;
if(isset($_SESSION['products']) && is_array($_SESSION['products'])) {
    $countProducts = count($_SESSION['products']);
}?>
    


<?php
    // Supprimez la variable de session après 3 secondes message d'erreur 
    if(isset($_SESSION['error_message'])): ?>
        <div id="error_message"><?php echo $_SESSION['error_message']; ?></div>

            <script>
                setTimeout(function(){
                    document.getElementById('error_message').style.display = 'none';
                    <?php unset($_SESSION['error_message']); ?>
                }, 3000);
            </script>
        <?php endif; ?>

    
        <!-- // Supprimez la variable de session après 3 secondes message de succes -->
    <?php if(isset($_SESSION['success_message'])): ?>
        <div id="success_message"><?php echo $_SESSION['success_message']; ?></div>
                <script>
                    setTimeout(function(){
                        $message=document.getElementById('success_message').style.display = 'none';
                        <?php unset($_SESSION['success_message']); ?>
                    },3000);

                </script>
                <?php endif; ?>

    <?php if(isset($_SESSION['delete_message'])):?>
        <div id="delete_message"><?php echo $_SESSION['delete_message']; ?></div>
    
        <!-- // Supprimez la variable de session après 3 secondes message d'erreur -->
        <script>
            setTimeout(function(){
                document.getElementById('delete_message').style.display = 'none';
                <?php unset($_SESSION['delete_message']); ?>
            }, 3000);
        </script>
    <?php endif; ?> 

 