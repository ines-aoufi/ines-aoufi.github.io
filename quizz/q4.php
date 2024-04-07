<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['like_cat']) || empty(trim($_POST['like_cat']))) {

    } else { 
        if ($_POST['like_cat'] == 'no') {
            header('Location: process.php');
            exit;
        }
    }
    if (!isset($_POST['cat_memes']) || empty(trim($_POST['cat_memes']))) {

    } else { 
            header('Location: process.php');
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
    <section class="container">
        <h2>Dernière question, et la plus importante, aimes-tu les chats ?</h2>
        <form method="POST" id="myForm">
            <div>
                <input type="radio" name="like_cat" value="yes" id="oui" required/>
                <label for="oui">Oui</label>
            </div>

            <div>
                <input type="radio" name="like_cat" value="no" class="no_select" id="non" required/>
                <label for="non">Non</label>
            </div>

            <div>
                <input type="submit" value="Confirmer" class="buttons">
            </div>
        </form>

    </section>
    <section id="hero">

<?php

if (isset($_POST['like_cat']) && $_POST['like_cat'] == 'yes') {

    $form = <<<EOD

<h2>Bonne réponse. maintenant choisis un meme de chat dans ma galerie :3</h2>
<form  method="POST" id="form_q4" class="change_size">
<fieldset class="BIGGERcontainer">
    <div>
        <input type="radio" id="hehe" name="cat_memes" required/>
        <label for="hehe"><img src="./assets/images/cat memes/hehe.jpg" alt="HEHE" class="img_resized"></label>
    </div>
    <div>
        <input type="radio" id="crying" name="cat_memes" required/>
        <label for="crying"><img src="./assets/images/cat memes/crying.jpg" alt="crying cat" class="img_resized"></label>
    </div>
    <div>
        <input type="radio" id="dink" name="cat_memes" required/>
        <label for="dink"><img src="./assets/images/cat memes/dink.jpg" alt="dink my ofee" class="img_sized"></label>
    </div>
    <div>
        <input type="radio" id="fairy" name="cat_memes" required/>
        <label for="fairy"><img src="./assets/images/cat memes/fairy.jpg" alt="fairy cat" class="img_sized"></label>
    </div>
    <div>
        <input type="radio" id="got_that" name="cat_memes" required/>
        <label for="got_that"><img src="./assets/images/cat memes/got_that.jpg" alt="" class="img_sized"></label>
    </div>
    <div>
        <input type="radio" id="bap" name="cat_memes" required/>
        <label for="bap"><img src="./assets/images/cat memes/bap.jpg" alt="" class="img_sized"></label>
    </div>
    <div>
        <input type="radio" id="eepy" name="cat_memes" required/>
        <label for="eepy"><img src="./assets/images/cat memes/eepy.jpg" alt="" class="img_sized"></label>
    </div>
    <div></div>
    <div>
        <input type="submit" value="Confirmer" class="buttons" />
    </div>
</fieldset>
</form>

EOD;

    echo $form;

}
?>
    </section>

    <footer>
        <p>
            Créée par Inès AOUFI
        </p>
    </footer>

<script src="assets/JS/questions.js"></script>
<script>
    const ctaQ4 = document.getElementById('form_q4');
    if (ctaQ4) {
        ctaQ4.addEventListener("submit", addPointsCats);
    }
</script>

</body>
</html>
