<?php // vérification qu'il y a bien une réponse, je ne vérifie pas ici qu'elle est bonne car je le ferais dans le javascript, et ça ne sera dans tous les cas pas dangereux puisque je n'utilise pas sa réponse directement dans mon code
if ($_SERVER['REQUEST_METHOD'] === 'POST') { //vérifie qu'on a bien envoyé un form avec la méthode POST
    if (!isset($_POST['saison']) || empty(trim($_POST['saison']))) { //check si il y a bien une réponse

    } else { //si oui envoie à la page d'après
        header('Location: q2.php'); // si c'est sélectionné et pas vide, on l'envoie à la page d'après
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
        <h2>Quelle est ta saison préférée ?</h2>
        <form method="POST" id="form_q1" action="q1.php">
        <div>
            <input type="radio" id="printemps" name="saison" value="Printemps" required/>
            <label for="printemps">Printemps</label>
        </div>
        <div>
            <input type="radio" id="ete" name="saison" value="Ete" required/>
            <label for="ete">Éte</label>
        </div>
        <div>
            <input type="radio" id="automne" name="saison" value="Automne" required/>
            <label for="automne">Automne</label>
        </div>
        <div>
            <input type="radio" id="hiver" name="saison" value="Hiver" required/>
            <label for="hiver">Hiver</label>
        </div>
        <div>
            <input type="submit" value="Confirmer" class="buttons" required/>
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
        const ctaQ1 = document.getElementById("form_q1");
        ctaQ1.addEventListener("submit", addPointsSeason);
    </script>
</body>
</html>