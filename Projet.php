<!DOCTYPE html>
<?php include 'modules/head.php' ?>

<body id="body_projet">
<div class="loader">
</div>

<header>
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    <nav id="menu">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="Competences.php">Compétences</a></li>
            <li><a class="actuelle" href="#">Projets</a></li>
            <li><a href="cv_FR.pdf" target="_blank">CV</a></li>
        </ul>
    </nav>
</header>

<main id="main_projet">
    <h1>Projets</h1>
    <div class="gallery">
        <div class="projet">
            <button class="accordion">
                <img src="img/fleche-droite.png" alt="flèche" class="arrow-icon">
                Galerie d'art
            </button>
            <div class="panel">
                <a>
                    <img src="img/ProjetGalerieArt/accueil_ordiProjet.png" alt="galerieArt" class="img-vitrine">
                </a>
                <p>Avec deux collèges, nous avons fait un site de galerie d'art éphémère. J'ai réalisé la page
                    d'accueil, la boutique ainsi que la présentation des artistes qui fond ou fait des expositions dans
                    la galerie.
                    Ce site m'a permis de faire mes premiers pas dans la responsive, on faisait le mode pour téléphone.
                    Ce projet à durer deux mois non consécutifs et m'a permis d'améliorer mon travail d'équipe ainsi que
                    la lisibilité de mon code. </p>
                </p>
            </div>
        </div>
        <div class="projet">
            <button class="accordion">
                <img src="img/fleche-droite.png" alt="flèche" class="arrow-icon">
                Quiz
            </button>
            <div class="panel">
                <a>
                    <img src="img/ProjetQuizSAE/quiz_musique.png" alt="quizz" class="img-vitrine">
                </a>
                <p> Avec deux collèges, nous avons fait créer un quiz en java qui avec trois parties avec plusieurs
                    modes et
                    difficultés. J'ai fait le mode crazy de l'histoire qui consiste à mouvoir une frise chronologique et
                    sélectionner l'endroit où on pense être la bonne date qui répond à la question.
                    Je me suis également occupé de toute la partie musique qui grâce à la bibliothèque Sounde, j'ai créé
                    un tableau de chanson qui nous servira pour lancer la changer, mais également vérifier la bonne
                    réponse du joueur.
                    Elle a trois difficultés, les difficultés se jouent sur le nombre de secondes qui passe de la
                    musique (facile : 15, intermédiaire : 10 et difficile 5).
                    Ce projet à durer une semaine et j'ai pu apprendre à utiliser une nouvelle librairie et également à
                    mieux gérer mon temps.</p>
            </div>
        </div>
        <div class="projet">
            <button class="accordion">
                <img src="img/fleche-droite.png" alt="flèche" class="arrow-icon">
                Premier Site
            </button>
            <div class="panel">
                <a> <img src="img/ProjetOhMyCode/premierSite_1.png" alt="ohmycode" class="img-vitrine">
                </a>
                <p>Pour pouvoir améliorer et bien assimiler les bases du langage Html ainsi que Css, j'ai décidé de
                    faire une page d'accueil avec des éléments différents dans l'optique d'améliorer et bien encrer mes
                    connaissances de base du web que ce sois les interactions avec les éléments (ajouter une animation
                    quand on est sur l'image, les liens) ou les placements de mes different éléments.</p>
            </div>
        </div>
        <div class="projet">
            <button class="accordion">
                <img src="img/fleche-droite.png" alt="flèche" class="arrow-icon">
                Nonogramme
            </button>
            <div class="panel">
                <a> <img src="img/ProjetNonogramme/nonogramme_accueil.png" alt="nonogramme" class="img-vitrine">
                </a>
                <p> Avec deux collèges, nous avons réalisé un Nonogramme en Java avec trois modes, le mode noir et
                    blanc,
                    couleur et Manuel. Je me suis occupé de la page d'accueil, des palettes de couleurs pour le mode
                    couleur et Manuel, importer les différents fichiers dessin
                    et j'ai également aidé mes collègues pour la création des grills et des légendes et la gestion
                    d'erreurs au moment de la validation du dessin. Ce projet a duré une semaine et il m'a permis de
                    renforcer mes compétences sur le graphique, la gestion du graphique et l'importation de fichier.</p>
            </div>
        </div>
        <div class="projet">
            <button class="accordion">
                <img src="img/fleche-droite.png" alt="flèche" class="arrow-icon">
                Éditeur de livre
            </button>
            <div class="panel">
                <a> <img src="img/ProjetLivre/Capture.png" alt="livre" class="img-vitrine">
                </a>
                <p> Avec deux collègues, nous avons programmé un éditeur de livre dont vous êtes le héros en C++. J'ai
                    programmé la barre avec plusieurs éléments cliquables afin de créer et d'édité un livre dont vous
                    êtes le héros. Dans notre application, vous pouvez retrouver une barre de menu pour sauvegarder,
                    pour
                    éditer le projet, pour en savoir plus sur l'application et une option pour êtres du point de vue du
                    joueur. Le projet a duré trois jours. Ce projet m’a appris à mieux gérer pression et à travailler
                    rapidement.</p>
            </div>
        </div>
        <div class="projet">
            <button class="accordion">
                <img src="img/fleche-droite.png" alt="flèche" class="arrow-icon">
                Candy Crush
            </button>
            <div class="panel">
                <a> <img src="img/ProjetCandyCrush/debutJeu.png" alt="Candy" class="img-vitrine">
                </a>
                <p> J'ai réalisé ce candy crush en java ou le but est d'aligner 3 images ou + pour avoir des points et
                    pour que le conteur ne tombe pas à zéro. Si le compteur tombe à zéro, vous auriez perdu. Ce projet
                    m'a pris 8h et il m'a permis de travailler l'aspect graphique, mais également de mieux gérer mes
                    tableaux ainsi que les éléments lier à la souris.</p>
            </div>
        </div>
        <div class="projet">
            <button class="accordion">
                <img src="img/fleche-droite.png" alt="flèche" class="arrow-icon">
                Tic Tac Toe
            </button>
            <div class="panel">
                <a> <img src="img/ProjetTicTacToe/T.png" alt="tictactoe" class="img-vitrine">
                </a>
                <p> Le Tic Tac Toe a été rélisé en Java sur Android Studio, j’ai voulu faire ce jeu pour pouvoir
                    découvrir
                    le “monde” du mobile et voir les fonctionnements et différences avec le web ou quand le code sur PC.
                    Le
                    projet a duré une semaine.</p>
            </div>
        </div>
        <div class="projet">
            <button class="accordion">
                <img src="img/fleche-droite.png" alt="flèche" class="arrow-icon">
                Tracks IUT
            </button>
            <div class="panel">
                <a> <img src="img/ProjetTracksIUT/web.png" alt="Tracks" class="img-vitrine">
                </a>
                <p> L’objectif de ce projet est de réaliser une application permettant la mise en place, l’organisation
                    et la participation à un jeu de piste. Cette application devra permettre l’organisation d’un jeu de
                    piste via un ordinateur et la participation à un jeu de piste via un téléphone.
                    <br>
                    Technologies utilisées :<br>
                    Flutter : Utilisé pour développer à la fois la partie mobile (pour les participants) et la partie
                    web (pour les organisateurs).
                    <br>
                    Firebase : Base de données en temps réel pour gérer les participants, les organisateurs, les
                    résultats des groupes et les sauvegardes de jeux de piste.
                    <br>
                    J'ai mené à bien ce projet avec trois autres personnes pendant ma deuxième année d'étude à l'IUT.
                </p>
            </div>
        </div>
        <div class="projet">
            <button class="accordion">
                <img src="img/fleche-droite.png" alt="flèche" class="arrow-icon">
                Blog sur spider-man
            </button>
            <div class="panel">
                <a> <img src="img/ProjetBlogSpider/accueil.png" alt="#" class="img-vitrine">
                </a>
                <p> J'ai réalisé ce projet dans le cadre de mon cours de programmation web ou j'ai appris à utiliser le
                    langage PHP.
                    J'ai mis en place différente fonctionnalité telles que<br>
                    - création de compte<br>
                    - Se connecter<br>
                    - Voir dernier article ajouter.</p>
            </div>
        </div>
        <div class="projet">
            <button class="accordion">
                <img src="img/fleche-droite.png" alt="flèche" class="arrow-icon">
                Recette de cuisine
            </button>
            <div class="panel">
                <a> <img src="img/ProjetRecipies/accueil.png" alt="#" class="img-vitrine">
                </a>
                <p>
                    L’objectif de ce projet de développer une plateforme web permettant d'ajouter, consulter et utiliser
                    des recettes de cuisine, avec une fonctionnalité générant automatiquement une liste de courses
                    personnalisée.
                    <br>
                    Technologies utilisées :<br>
                    cakePhp
                    <br>
                    Mysql
                    <br>
                    J'ai mené à bien ce projet avec une autre personne et il a durée deux mois.
                </p>
            </div>
        </div>

        <div class="projet">
            <button class="accordion">
                <img src="img/fleche-droite.png" alt="flèche" class="arrow-icon">
                Liste de Restaurant
            </button>
            <div class="panel">
                <a> <img src="img/ProjetRestaurant/list.jpg" alt="#" class="img-vitrine">
                </a>
                <p>
                    L’objectif de ce projet et de réaliser une application pour Téléphone qui permet
                    d’informer l’utilisateur avec des données mises à disposition par les
                    pouvoirs public sous la forme de données ouvertes (open data).
                    Pour ma part, j'ai choisi une API qui regroupe les restaurants en France
                    et Outre-Mer.
                    <br>
                    Technologies utilisées :<br>
                    Java (Android Studio)
                    <br>
                    J'ai mené à bien ce projet seul et il a durée un mois.
                </p>
            </div>
        </div>

    </div>
</main>
<?php include 'modules/footer.php' ?>
<script src="script.js"></script>

</body>

