<?php
    $name=$_POST["user_name"];
    $firstname=$_POST["user_firstname"];
    $subject=$_POST["subject-select"];
    $email=$_POST["user_email"];
    $message=$_POST["user_message"];
    $phone=$_POST["user_phone"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>Remerciement</title>
</head>
<body>
<article>
Merci <?php echo $firstname." ".$name; ?> de nous avoir contacté à propos de “<?php echo $subject; ?>”.
Un de nos conseiller vous contactera soit à l’adresse <? echo $email ?> ou par téléphone au <?php echo $phone ?> dans les plus brefs délais pour traiter votre demande : 

<?php echo $message; ?>
</article>
</body>
</html>