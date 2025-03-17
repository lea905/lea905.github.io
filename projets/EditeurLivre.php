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
                <li><a href="cv.pdf"  target="_blank">CV</a> </li>
            </ul>
        </nav>
    </header>
    <main id="main_galery">
        <h1 id="Livre">Éditeur de livre dont vous êtes le héros</h1>
        <div id="slideshow_text_projet_livre">
            <div id="slideshow_livre">
                <div class="image_livre">
                    <img src="/img/ProjetLivre/Capture.png" alt="accueil">
                </div>
            </div>
            <div class="text_livre">
                <p>
                    Avec deux collègues, nous avons programmé un éditeur de livre dont vous êtes le héros en C++. J'ai
                    programmé la barre avec plusieurs éléments cliquables afin de créer et d'édité un livre dont vous
                    êtes le héros. Dans notre application vous pouvez retrouver une barre de menu pour sauvegarder, pour
                    éditer le projet, pour en savoir plus sur l'application et une option pour êtes du point de vue du
                    joueur. Le projet a duré trois jours. Ce projet m’a appris à mieux gérer pression et à travailler
                    rapidement.
                </p>
            </div>
        </div>
    </main>
    <?php include __DIR__ .'/../modules/footer.php' ?>
    <script src="/../script.js"></script>
</body>

</html>