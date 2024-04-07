<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['animal']) || empty(trim($_POST['animal']))) {

    } else {
        header('Location: q3.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Quizz genshin</title>
    <link rel="icon" type="image/x-icon" href="assets/images/elynas_lol.png">

    <!-- Lien vers la page CSS -->
    <link rel="stylesheet" href="assets/style/style.css">
    
</head>

<body>
    <header>
        <nav>
            <div><a href="index.php"><img src="assets/images/elynas_lol.png" alt="logo" class="img_logo"></a></div>
        </nav>
    </header>
    <section id="hero" class="container">
        <h2>Quel est ton animal préféré ?</h2>
        <form method="POST" id="form_q2">
            <div>
                <input type="radio" id="pigeon" name="animal" required/>
                <label for="pigeon">Pigeon</label>
            </div>
            <div>
                <input type="radio" id="renard" name="animal" required/>
                <label for="renard">Renard</label>
            </div>
            <div>
                <input type="radio" id="chien" name="animal" required/>
                <label for="chien">Chien</label>
            </div>
            <div>
                <input type="radio" id="chat" name="animal" required/>
                <label for="chat">Chat</label>
            </div>
            <div>
                <input type="radio" id="loutre" name="animal" required/>
                <label for="loutre">Loutre</label>
            </div>
            <div>
                <input type="radio" id="grenouille" name="animal" required/>
                <label for="grenouille">Grenouille</label>
            </div>
            <div>
                <input type="radio" id="scarabe" name="animal" required/>
                <label for="scarabe">Scarabée</label>
            </div>
            <div>
            <input type="submit" value="Confirmer" class="buttons" />
            </div>
        </form>
    </section>

    <footer>
        <p>
            Créée par Inès AOUFI
        </p>
    </footer>

    <script src="assets/JS/questions.js"></script>
    <script>
        const ctaQ2 = document.getElementById('form_q2')
        ctaQ2.addEventListener("submit", addPointsAnimal); 
    </script>
</body>
</html>
