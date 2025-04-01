<!DOCTYPE html>
<?php include __DIR__ . '/../modules/head.php' ?>

<body id="body_desProjets">
<div class="loader">
</div>
<header>
    <nav>
        <ul>
            <li><a href="/../index.php">Accueil</a></li>
            <li><a href="/../Competences.php">Compétences</a></li>
            <li><a class="actuelle" href="/../Projet.php">Projets</a></li>
            <li><a href="/cv_FR.pdf" target="_blank">CV</a></li>
        </ul>
    </nav>
</header>
<main id="main_galery">
    <h1>Tracks IUT</h1>
    <div id="image_text_projet_Tracks">
        <div class="image_Tracks">
            <img src="/img/ProjetTracksIUT/web.png" alt="accueilWeb">
        </div>

        <div class="text_Tracks">
            <p>
                L’objectif de ce projet est de réaliser une application permettant la mise en place, l’organisation et la participation à un jeu de piste. Cette application devra permettre l’organisation d’un jeu de piste via un ordinateur et la participation à un jeu de piste via un téléphone.
<br>
                Technologies utilisées:<br>
                Flutter : Utilisé pour développer à la fois la partie mobile (pour les participants) et la partie web (pour les organisateurs).
                <br>
                Firebase : Base de données en temps réel pour gérer les participants, les organisateurs, les résultats des groupes et les sauvegardes de jeux de piste.
<br>
                J'ai mené à bien ce projet avec trois autres personnes pendant ma deuxième année d'étude à l'IUT.
            </p>
        </div>
    </div>
</main>
<?php include __DIR__ . '/../modules/footer.php' ?>
<script src="/../script.js"></script>
</body>

</html>