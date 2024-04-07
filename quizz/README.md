# Évaluation Développement web
## Membre du Groupe
Inès AOUFI

## Objectif du site
Ce site est une sorte de quizz de personnalité pour savoir quel élement vous êtes (tiré du jeu Genshin Imapct)

## Sitemap
- page d'accueil
- question 1
- question 2
- question 3
- question 4
- process
- resultats du quizz

Je n'ai pas mis le sitemap dans le footer, car on doit aller à travers les pages de manière linéaire.
Je n'ai pas vraiment de barre de navigation non plus du coup, meme si quand on clique sur le logo ça nous ramène à la page d'accueil.

La page d'accueil sert évidemment d'accueil mais aussi à initialiser toutes les données JavaScript puisque j'utilise du local storage pour garder les réponses aux questions, ensuite on a toutes les pages de questions, qui à chaque fois lance le fichier JS qui permet de lancer les fonctions correspondantent pour comptabiliser les points qui correspondent à chaque élement. À la page process.php on apelle resultats.js qui permet de calculer quel est l'élément avec le plus de points et d'envoyer la donnée au php. La dernière page (resultats.php) on affiche le résultat pour l'utilisateur puis on incrémente sur le fichier CSV son élément puis on affiche le pourcentages d'éléments de tous les résultats obtenus jusqu'ici

## Lancer le projet
Il faut mettre le dossier entier sur un serveur local, de cette manière :
```bash
php -S localhost:3000 -t AOUFI_INES_projet
```

## Remarques
Puisque j'avais commencé le projet en tant que projet perso (*Certains des commentaires seront en anglais et d'autres en français à cause de cela aussi*), quand je ne savais faire que du html et JS, j'ai du reprendre beaucoup d'endroits qui n'étaient pas le plus clean, et changer tous les fichiers HTML en fichier PHP etc. Notamment pour la fin, devoir récupérer une variable JS sous du PHP pour le mettre dans le fichier CSV, j'ai eu énormément de mal. Mais ça marche maintenant (même si je me suis beaucoup aidé d'IA) et j'en suis contente.

J'aurais aimé utiliser les templates pour faire la barre de nav et le footer mais je manquais de temps. Je n'hésiterais pas à le rajouter de mon côté dès que je peux pour mon [github](https://ines-aoufi.github.io/) cependant.

## Références
- Cours incroyables de Paul Schuhmacher
- Plusieurs posts de stackoverflow
- Blackbox AI pour certains petits endroits du programme où je n'arrivais pas à savoir comment faire une action exactement, ou une erreur que je ne comprenais pas, notamment pour la partie avec la base de donnée en php et la manipulation de fichier, j'ai eu beaucoup de mal avec ça donc j'ai pas mal utilisé Nlackbox AI mais j'ai bien fait attention à comprendre chaque ligne qu'il me donnait et j'allais me renseigner ailleurs si je ne comprenais pas.