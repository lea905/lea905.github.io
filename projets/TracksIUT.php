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
        <h1>Tracks IUT</h1>
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
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sed, dolore deserunt tenetur facere natus dolores reiciendis eveniet molestias nam aut fugit sapiente modi minus officia reprehenderit eius sequi incidunt!
                </p>
            </div>
        </div>
    </main>
    <?php include __DIR__ .'/../modules/footer.php' ?>
    <script src="/../script.js"></script>
</body>

</html>