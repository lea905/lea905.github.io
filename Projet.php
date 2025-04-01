<!DOCTYPE html>
<?php include 'modules/head.php' ?>

<body id="body_projet">
    <div class="loader">
    </div>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="Competences.php">Compétences</a></li>
                <li><a class="actuelle" href="#">Projets</a></li>
                <li><a href="cv_FR.pdf"  target="_blank">CV</a> </li>
            </ul>
        </nav>
    </header>
    <main id="main_projet">
        <h1>Projets</h1>
        <div class="gallery-fleche">
            <span><img src="img/flecheG.png" id="backBtn" alt="bouton"></span>
            <div class="gallery">
                <div>
                    <span><a href="projets/Galery_art.php" target="_blank"><img
                                src="img/ProjetGalerieArt/accueil_ordiProjet.png" alt="galerieArt"
                                class="img-vitrine"></a>
                        <p>Galerie d'art</p>
                    </span>
                    <span><a href="projets/Quiz.php" target="_blank"><img src="img/ProjetQuizSAE/quiz_musique.png" alt="quizz"
                                class="img-vitrine"></a>
                        <p>Quiz</p>
                    </span>
                    <span><a href="projets/PremierSite.php" target="_blank"><img src="img/ProjetOhMyCode/premierSite_1.png"
                                alt="ohmycode" class="img-vitrine"></a>
                        <p>Premier Site</p>
                    </span>
                </div>
                <div>
                    <span><a href="projets/Nonogramme.php" target="_blank"><img
                                src="img/ProjetNonogramme/nonogramme_accueil.png" alt="nonogramme"
                                class="img-vitrine"></a>
                        <p>Nonogramme</p>
                    </span>
                    <span><a href="projets/EditeurLivre.php" target="_blank"><img src="img/ProjetLivre/Capture.png" alt="livre"
                                class="img-vitrine"></a>
                        <p>Éditeur de livre </p>
                    </span>
                    <span><a href="projets/CandyCrush.php" target="_blank"><img src="img/ProjetCandyCrush/debutJeu.png" alt="Candy"
                                class="img-vitrine"></a>
                        <p>Candy Crush</p>
                    </span>
                </div>
                <div>
                    <span><a href="projets/TicTacToe.php" target="_blank"><img
                                src="img/ProjetTicTacToe/T.png" alt="tictactoe"
                                class="img-vitrine"></a>
                        <p>Tic Tac Toe</p>
                    </span>
                    <span><a href="projets/TracksIUT.php" target="_blank"><img src="img/ProjetTracksIUT/logo.png" alt="Tracks"
                                class="img-vitrine"></a>
                        <p>Tracks IUT </p>
                    </span>
                    <span><a href="#" target="_blank"><img src="img/AVenir.avif" alt="#"
                                class="img-vitrine"></a>
                        <p>A venir</p>
                    </span>
                </div>

            </div>
            <span><img src="img/flecheD.png" id="nextBtn" alt="bouton"></span>
            <script>
                let scrollContainer = document.querySelector(".gallery");
                let backBtn = document.getElementById("backBtn")
                let nextBtn = document.getElementById("nextBtn")

                scrollContainer.addEventListener("whell", (evt) => {
                    evt.preventDefault();
                    scrollContainer.scrollLeft += evt.deltaY;
                    scrollContainer.style.scrollBehavior = "auto"
                });

                nextBtn.addEventListener("click", () => {
                    scrollContainer.style.scrollBehavior = "smooth"
                    scrollContainer.scrollLeft += 785;
                });

                backBtn.addEventListener("click", () => {
                    scrollContainer.style.scrollBehavior = "smooth"
                    scrollContainer.scrollLeft -= 785;
                });

            </script>

        </div>
        <!-- <a id="Lien_Github" href="https://github.com/lea905/Projet" target="_blank"><p>Github</p></a>-->
    </main>
    <?php include 'modules/footer.php' ?>
    <script src="script.js"></script>
</body>

</html>