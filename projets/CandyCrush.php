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
                <li><a href="/cv_FR.pdf" target="_blank">CV</a> </li>
            </ul>
        </nav>
    </header>
    <main id="main_galery">
        <h1>Candy Crush</h1>
        <div id="slideshow_text_projet_Candy">
            <div id="slideshow_Candy">
                <div class="image_Candy">
                    <img src="/img/ProjetCandyCrush/debutJeu.png" alt="Candy">
                </div>
            </div>
            <div class="text_Candy">
                <p>
                    J'ai réalisé ce candy crush en java ou le but est d'aligner 3 images ou + pour avoir des points et
                    pour que le conteur ne tombe pas à zéro. Si le compteur tombe à zéro vous auriez perdu. Ce projet
                    m'a pris 8h et il m'a permis de travailler l'aspect graphique mais également de mieux gérer mes
                    tableaux ainsi que les éléments lier à la souris.
                </p>
            </div>
        </div>
    </main>
    <?php include __DIR__ .'/../modules/footer.php' ?>
    <script src="/../script.js"></script>
</body>

</html>