<?php 
include "domande.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Faq</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="navbar clearfix">
        <ul class="horiz">
            <li>Introduzione</li>
            <li>Norme sulla privacy</li>
            <li>Termini di servizio</li>
            <li>Tecnologie</li>
            <li class="blue">Domande frequenti</li>  
        </ul> 
    </div>

    <div class="faq"> 
        <?php foreach ($questions as $info) { ?>
            <h2><?php echo $info['question'] ?></h2>
            <p><?php echo nl2br($info['answer']); ?></p>
            <br>
        <?php } ?>
    </div>

</body>
</html>
