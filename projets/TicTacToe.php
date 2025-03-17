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
        <h1>Tic Tac Toe</h1>
        <div id="slideshow_text_projet_Tic">
            <div id="slideshow_Tic">
                <div class="image_Tic">
                    <img src="/img/ProjetTicTacToe/accueil.jpg" alt="accueil">
                    <img src="/img/ProjetTicTacToe/jeu.jpg" alt="jeu">
                    <img src="/img/ProjetTicTacToe/gagne.jpg" alt="gagne">
                    <img src="/img/ProjetTicTacToe/matchNul.jpg" alt="matchNul">
                </div>
            </div>
            <div class="text_Tic">
                <p>
                    Le Tic Tac Toe a été rélisé en Java sur Android Studio, j’ai voulu faire ce jeu pour pouvoir découvrir
                    le “monde” du mobile et voir les fonctionnements et différences avec le web ou quand le code sur PC. Le
                    projet a duré 1 semaine.
                </p>
            </div>
        </div>
    </main>
    <?php include __DIR__ .'/../modules/footer.php' ?>
    <script src="/../script.js"></script>
</body>

</html>