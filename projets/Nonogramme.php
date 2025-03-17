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
        <h1>Nonogramme</h1>
        <div id="slideshow_text_projet_Nono">
            <div id="slideshow_Nono">
                <div class="image_Nono">
                    <img src="/img/ProjetNonogramme/nonogramme_accueil.png" alt="accueil">
                    <img src="/img/ProjetNonogramme/nonogramme_classique.png" alt="classique">
                    <img src="/img/ProjetNonogramme/nonogramme_couleur.png" alt="couleur">
                    <img src="/img/ProjetNonogramme/nonogramme_manuel.png" alt="manuel">
                </div>
            </div>
            <div class="text_Nono">
                <p>
                    Avec deux collèges nous avons réalisé un Nonogramme en Java avec 3 modes, le mode noir et blanc,
                    couleur et Manuel. Je me suis occupé de la page d'accueil, des palettes de couleurs pour le mode
                    couleur et Manuel, importer les différents fichiers dessin
                    et j'ai également aidé mes collègues pour la création des grills et des légendes et la gestion
                    d'erreurs au moment de la validation du dessin. Ce projet a duré 1 semaine et il m'a permis de
                    renforcer mes compétences sur le graphique, la gestion du graphique et l'importation de fichier.
                </p>
            </div>
        </div>
    </main>
    <?php include __DIR__ .'/../modules/footer.php' ?>
    <script src="/../script.js"></script>
</body>

</html>