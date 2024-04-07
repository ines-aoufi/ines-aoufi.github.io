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
        <h2>Merci d'avoir jouer à mon quizz :)</h2>
        <p>
            Veuillez appuyer sur suivant pour accéder à votre résultat !
        </p>
        <form action="resultats.php" method="POST">  <!-- J'utilise un form avec POST pour pouvoir transférer la donnée calculée en JavaScript jusqu'au PHP, mais puisqu'on a besoins de rafraichir la page pour le transférer, j'ai fait cette étape sur une page à part, cat sinon ça me rafraichissait la dernière page à l'infini -->
            <input type="hidden" id="hiddenInput" name="elementTransfer"> <!-- Je cache donc cette partie là -->
            <input type="submit" value="Suivant" class="buttons restart"> <!-- Je créer un bouton pour que l'utilisateur submit le form lui même, c'était plus simple -->
        </form>
    </section>

    <footer>
        <p>
            Créée par Inès AOUFI
        </p>
    </footer>

    <script src="assets/JS/resultats.js"></script>

    <script>
        document.getElementById('hiddenInput').value = elementTransfer;
    </script>

</body>
</html>
