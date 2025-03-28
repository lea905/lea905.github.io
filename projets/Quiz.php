<!DOCTYPE html>
<?php include __DIR__ .'/../modules/head.php' ?>

<body id="body_desProjets">
    <div class="loader">
    </div>
    <header>
        <nav>
            <ul>
                <li><a href="/../index.php">Accueil</a></li>
                <li><a href="/../Competences.php">Compétences</a></li>
                <li><a class="actuelle" href="/../Projet.php">Projets</a></li>
                <li><a href="/cv_FR.pdf"  target="_blank">CV</a> </li>
            </ul>
        </nav>
    </header>
    <main id="main_galery">
        <h1>Quiz</h1>
        <div id="slideshow_text_projet_quiz">
            <div id="slideshow_quiz">
                <div class="image_quiz">
                    <img src="/img/ProjetQuizSAE/quiz_musique.png" alt="musique">
                    <img src="/img/ProjetQuizSAE/quiz_histoirModeCrazy.png" alt="crazy">
                </div>
            </div>
            <div class="text_quiz">
                <p>
                    Avec deux collèges nous avons fait crée un quiz en java qui avec 3 parties avec plusieurs modes et
                    difficultés. J'ai fait le mode crazy de l'histoire qui consiste à mouvoir une frise chronologique et
                    sélectionner l'endroit où on pense être la bonne date qui répond à la question.
                    Je me suis également occupé de toute la partie musique qui grâce à la bibliothèque Sounde j'ai créé
                    un tableau de chanson qui nous servira pour lancer la changer mais également vérifier la bonne
                    réponse du joueur.
                    Elle a trois difficultés, les difficultés se jouent sur le nombre de secondes qui passe de la
                    musique (facile : 15, intermédiaire : 10 et difficile 5).
                    Ce projet à durer une semaine et j'ai pu apprendre à utiliser une nouvelle librairie et également à
                    mieux gérer mon temps.
                </p>
            </div>
        </div>
    </main>
    <?php include __DIR__ .'/../modules/footer.php' ?>
    <script src="/../script.js"></script>
</body>

</html>