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
        <h1>Premier Site</h1>
        <div id="slideshow_text_projet_Psite">
            <div id="slideshow_Psite">
                <div class="image_Psite">
                    <img src="/img/ProjetOhMyCode/premierSite_1.png" alt="OhMyCode1">
                    <img src="/img/ProjetOhMyCode/premierSite_2.png" alt="OhMyCode2">
                </div>
            </div>
            <div class="text_Psite">
                <p>
                    Pour pouvoir améliorer et bien assimiler les bases du langage Html ainsi que Css j'ai décidé de
                    faire une page d'accueil avec des éléments différents dans l'optique d'améliorer et bien encrer mes
                    connaissances de base du web que ce sois les interactions avec les éléments (ajouter une animation
                    quand on est sur l'image, les liens) ou les placements de mes different éléments.
                </p>
            </div>
        </div>
    </main>
    <?php include __DIR__ .'/../modules/footer.php' ?>
    <script src="/../script.js"></script>
</body>

</html>