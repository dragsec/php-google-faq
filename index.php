<?php 
$questions = include("domande.php");
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
    <!-- test -->
    <h2> test <br>
        <?php foreach ($questions as $info) { ?>
            <h2><?php echo $info['question'] ?></h2>
            <p><?php echo nl2br($info['answer']); ?></p>
            <br>
        <?php } ?>
    </h2>

            <div class="test">
                sssssssss
            </div>
<!-- test -->
</body>
</html>
