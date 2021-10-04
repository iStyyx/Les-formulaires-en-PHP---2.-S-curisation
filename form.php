<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les formulaires en PHP - 2. Sécurisation</title>
</head>
<body>
    
    <form  action="thanks.php"  method="post">
        <h1>Formulaire d'adoption d'un animal</h1>
        <div>
            <label for="surname">Nom :</label>
            <input type="text"  id="surname"  name="user_surname" required>
        </div>
        <div>
            <label for="name">Prénom :</label>
            <input type="text"  id="name"  name="user_name" required>
        </div>
        <div>
            <label for="courriel">Adresse e-mail :</label>
            <input type="email"  id="courriel"  name="user_email" required>
        </div>
        <div>
            <label for="phone">Numéro de téléphone :</label>
            <input type="number"  id="phone"  name="user_phone" required>
        </div>
        <div>
            <label for="subject">La demande concerne un :</label>
            <select name="user_subject" id="subject" required>
                <option value="Chien">Chien</option>
                <option value="Chat">Chat</option>
                <option value="Lapin">Lapin</option>
                <option value="Poulet">Poulet</option>
            </select>
        </div>
            <label for="message">Message :</label>
            <textarea id="message"  name="user_message" required></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>

</body>
</html>
