<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['sentiment']) || empty(trim($_POST['sentiment']))) {

    } else {
        header('Location: q4.php');
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
        <h2>Quel est le sentiment que tu détestes le plus ?</h2>
        <form method="POST" id="form_q3">
            <div>
                <input type="radio" id="ennui" name="sentiment" required/>
                <label for="ennui">L'ennui</label>
            </div>
            <div>
                <input type="radio" id="colere" name="sentiment" required/>
                <label for="colere">La colère</label>
            </div>
            <div>
                <input type="radio" id="decouragement" name="sentiment" required/>
                <label for="decouragement">Le découragement</label>
            </div>
            <div>
                <input type="radio" id="inquietude" name="sentiment" required/>
                <label for="inquietude">L'inquiétude</label>
            </div>
            <div>
                <input type="radio" id="etonnement" name="sentiment" required/>
                <label for="etonnement">L'étonnement</label>
            </div>
            <div>
                <input type="radio" id="nervosite" name="sentiment" required/>
                <label for="nervosite">La nervosité</label>
            </div>
            <div>
                <input type="radio" id="agitation" name="sentiment" required/>
                <label for="agitation">L'agitation</label>
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
        const ctaQ3 = document.getElementById('form_q3');
        ctaQ3.addEventListener("submit", addPointsSentiment);
    </script>
</body>
</html>
