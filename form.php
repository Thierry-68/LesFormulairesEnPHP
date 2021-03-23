<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="thanks.php" method="POST">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_name">
        </div>
        <div>
            <label for="nom">Prenom :</label>
            <input type="text" id="prenom" name="user_firstname">
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email" require>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message"></textarea>
        </div>
        <div>
            <label for="user_phone">Number of téléphone :</label>
            <input id="phone" type="tel" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" name="user_phone">
        </div>
        <div>
            <label for="subject-select">Objet du message:</label>
            <select name="subject-select" id="user_subject" require>
                <option value="">--Choisir une option--</option>
                <option value="langue">Cours de langue</option>
                <option value="exercice">Problème sur exercice</option>
                <option value="commande">Prise de commande</option>
                <option value="rendezvous">Prise de rendez-vous</option>
            </select>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>

</html>