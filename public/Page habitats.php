<?php include 'session.php'; ?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Habitats - Zoo Arcadia</title>
    <link href="CSS page accueil.css" rel="stylesheet" />

    <!-- Lien vers la page accueil -->
    <a href="index.php"></a>
    <!-- Lien vers la page habitats -->
    <a href="Page habitats.php"></a>
    <!-- Lien vers la page services -->
    <a href="Page services.php"></a>
    <!-- Lien vers la page animaux -->
    <a href="Page_animaux.php"></a>
    <!-- Lien vers la page contact -->
    <a href="Page_contact.html"></a>

    <!-- Lien vers les polices Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap" rel="stylesheet">
</head>
<body>

<!-- Début de la section Header -->
<header>
    <a href="index.php">
        <img src="Image ECF/Designer__41_-removebg-preview.png" alt="Logo du Zoo">
    </a>

    <!-- Menu burger pour mobile -->
    <span class="menu-burger" onclick="toggleMenu()">&#9776;</span>

    <!-- Navigation principale -->
    <nav id="menu">
        <a href="index.php">Accueil</a>
        <a href="Page habitats.php" class="active">Habitats</a>
        <a href="Page services.php">Services</a>
        <a href="Page_animaux.php">Animaux</a>
        <a href="Page_contact.html">Contact</a>
        <a href="logout.php">Déconnexion</a>
    </nav>
    
    <!-- Icône de connexion -->
<div class="login">
    <img src="Image ECF/Login logo.png" alt="Connexion" class="login-icon" onclick="openModal()">
</div>

<!-- La fenêtre modale -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Connexion</h2>
        <!-- Contenu de la fenêtre modale, par exemple, un formulaire de connexion -->
        <form action="page-connexion.php" method="post">
            <label for="role">Choisissez votre rôle:</label>
            <select id="role" name="role" required>
                <option value="" disabled selected>Sélectionner un rôle</option>
                <option value="Vétérinaire">Vétérinaire</option>
                <option value="Employé">Employé</option>
                <option value="Administrateur">Administrateur</option>
            </select><br><br>

            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Se connecter">
        </form>
    </div>
</div>
</header>
<!-- Fin de la section Header -->








<!-- Section Image avec texte Nos Habitats -->
<section id="image-header">
    <div class="image-container">
        <div class="overlay-text">
            <h1>Nos Habitats</h1>
        </div>
    </div>
</section>

<!-- Section de texte d'introduction -->
<section id="intro-text">
    <p>Bienvenue dans notre section dédiée aux habitats. Découvrez nos nouveaux habitats recréés avec soin au zoo, chacun soigneusement conçu pour reproduire fidèlement les milieux naturels de nos animaux. La savane, avec ses vastes étendues et ses éléments authentiques, permet aux majestueux lions et aux élégantes girafes d'évoluer comme dans leur habitat d'origine. Plongez dans notre forêt tropicale, où chaque détail, des arbres aux cascades, a été pensé pour offrir un environnement idéal aux singes espiègles et aux oiseaux colorés. Enfin, explorez notre habitat aquatique, une reconstitution méticuleuse qui permet aux crocodiles impressionnants et aux flamants roses gracieux de vivre dans des conditions proches de leur milieu naturel.</p>
</section>






<!-- Section Habitats -->
<section id="habitats">


    <!-- Section Savane --> 
    <section id="savane">
        <h2>La Savane</h2>
        <div class="slideshow-container2" id="slideshowsavane">
            <div class="slides-wrapper2">
                <div class="slides2"><img src="Image ECF/Image savane 1.jpg" alt="savane 1"></div>
                <div class="slides2"><img src="Image ECF/Image savane 2.jpg" alt="savane 2"></div>
                <div class="slides2"><img src="Image ECF/Image éléphant 3.jpg" alt="savane 3"></div>
            </div>
            <a class="prev2" onclick="changeSlide(-1, 'slideshowsavane')">&#10094;</a>
            <a class="next2" onclick="changeSlide(1, 'slideshowsavane')">&#10095;</a>
            <div class="dots-container2">
                <span class="dot2" onclick="currentSlide(1, 'slideshowsavane')"></span>
                <span class="dot2" onclick="currentSlide(2, 'slideshowsavane')"></span>
                <span class="dot2" onclick="currentSlide(3, 'slideshowsavane')"></span>
            </div>
        </div>
        <button class="toggle-details-button" onclick="toggleDetails('savane')">Voir les détails de cet habitat</button>

        <div class="habitat-details hidden" id="details-savane">
            <p class="narrow-paragraph">La savane est un écosystème étendu caractérisé par de vastes prairies et quelques arbres épars, offrant un habitat riche et diversifié. Elle abrite des animaux emblématiques tels que les lions, zèbres et girafes, qui évoluent dans cet environnement unique et ouvert. Ce milieu est également marqué par des saisons distinctes, avec une période sèche et une période des pluies, influençant fortement la vie végétale et animale.</p>
        </div>

        <div class="dropdown">
            <button class="dropdown-button" id="button1">Afficher les animaux de la savane !</button>
            <div class="dropdown-content" id="Images1">
                <a href="Page_animaux.php?animal=leo_le_lion">
                    <img src="Image ECF/pexels-gareth-davies-230510-1598377.jpg" alt="Léo le lion" class="dropdown-image">
                    <p> Le lion </p>
                </a>
                <a href="Page_animaux.php?animal=zozo_le_zebre">
                    <img src="Image ECF/Image zebre 1.jpg" alt="Zozo le zèbre" class="dropdown-image">
                    <p> Le zèbre </p>
                </a>
                <a href="Page_animaux.php?animal=ronan_le_rhinoceros">
                    <img src="Image ECF/pexels-ellie-burgin-1661546-13147987.jpg" alt="Ronan le rhinocéros" class="dropdown-image">
                    <p> Le rhinocéros </p>
                </a>
                <a href="Page_animaux.php?animal=gigie_la_giraffe">
                    <img src="Image ECF/Image giraffe 1.jpg" alt="Gigie la girafe" class="dropdown-image">
                    <p> La girafe </p>
                </a>
                <a href="Page_animaux.php?animal=elie_lelephant">
                    <img src="Image ECF/Image éléphant 2.jpg" alt="Elie l'éléphant" class="dropdown-image">
                    <p> L'éléphant </p>
                </a>
                <a href="Page_animaux.php?animal=benoit_le_buffle">
                    <img src="Image ECF/Image Buffle 1.jpg" alt="Benoît le buffle" class="dropdown-image">
                    <p> Le buffle </p>
                </a>
            </div>
        </div>
    </section>

    <!-- Section Jungle -->
    <section id="jungle">
        <h2>La Jungle</h2>
        <div class="slideshow-container2" id="slideshowjungle">
            <div class="slides-wrapper2">
                <div class="slides2"><img src="Image ECF/Image jungle 2.jpg" alt="jungle 1"></div>
                <div class="slides2"><img src="Image ECF/Image jungle 1.jpg" alt="Image 2"></div>
                <div class="slides2"><img src="Image ECF/Image arbre.jpg" alt="Image 3"></div>
            </div>
            <a class="prev2" onclick="changeSlide(-1, 'slideshowjungle')">&#10094;</a>
            <a class="next2" onclick="changeSlide(1, 'slideshowjungle')">&#10095;</a>
            <div class="dots-container2">
                <span class="dot2" onclick="currentSlide(1, 'slideshowjungle')"></span>
                <span class="dot2" onclick="currentSlide(2, 'slideshowjungle')"></span>
                <span class="dot2" onclick="currentSlide(3, 'slideshowjungle')"></span>
            </div>
        </div>
        <button class="toggle-details-button" onclick="toggleDetails('jungle')">Voir les détails de cet habitat</button>
        <div class="habitat-details hidden" id="details-jungle">
            <p class="narrow-paragraph">La jungle est une forêt tropicale dense, luxuriante et humide, où la végétation est si dense qu'elle crée un couvert épais. Elle est le foyer de nombreuses espèces, telles que les tigres, gorilles et perroquets, qui prospèrent dans cette biodiversité exceptionnelle. Ce milieu est aussi caractérisé par une chaleur constante et des précipitations abondantes, contribuant à un écosystème riche et complexe.</p>
        </div>
        <div class="dropdown">
            <button class="dropdown-button" id="button2">Afficher les animaux de la jungle !</button>
            <div class="dropdown-content" id="Images2">
                <a href="Page_animaux.php?animal=peter_le_perroquet">
                    <img src="Image ECF/Image perroquet 2.jpg" alt="Peter le perroquet" class="dropdown-image">
                    <p> Le perroquet </p>
                </a>
                <a href="Page_animaux.php?animal=paul_le_panda_roux">
                    <img src="Image ECF/Image panda roux 1.jpg" alt="Paul le panda roux" class="dropdown-image">
                    <p> Le panda roux </p>
                </a>
                <a href="Page_animaux.php?animal=gerard_le_gorille">
                    <img src="Image ECF/Image Gorille 1.jpg" alt="Gérard le gorille" class="dropdown-image">
                    <p> Le gorille </p>
                </a>
                <a href="Page_animaux.php?animal=serge_le_serpent">
                    <img src="Image ECF/Image serpent 1.jpg" alt="Serge le serpent" class="dropdown-image">
                    <p> Le serpent </p>
                </a>
                <a href="Page_animaux.php?animal=charlyne_le_chimpanze">
                    <img src="Image ECF\Image chimpaze 1.jpg" alt="Charlyne le chimpanzé" class="dropdown-image">
                    <p> Le chimpanzé </p>
                </a>
                <a href="Page_animaux.php?animal=pathie_la_panthere_noire">
                    <img src="Image ECF/panthere-elegante-agile-rodant-dans-broussailles-denses-furtivite-grace_1268-35055.jpg" alt="Pathie la panthère noire" class="dropdown-image">
                    <p> La panthère noire </p>
                </a>
                <a href="Page_animaux.php?animal=theo_le_tigre">
                    <img src="Image ECF/Image tigre 2.jpg" alt="Théo le tigre" class="dropdown-image">
                    <p> Le tigre </p>
                </a>
            </div>
        </div>
    </section>

    <!-- Section Marais -->
    <section id="marais">
        <h2>Le Marais</h2>
        <div class="slideshow-container2" id="slideshowmarais">
            <div class="slides-wrapper2">
                <div class="slides2"><img src="Image ECF/Image marais 1.jpg" alt="marais 1"></div>
                <div class="slides2"><img src="Image ECF/Image marais 2.jpg" alt="marais 2"></div>
                <div class="slides2"><img src="Image ECF/marais 3.jpg" alt="marais 3"></div>
            </div>
            <a class="prev2" onclick="changeSlide(-1, 'slideshowmarais')">&#10094;</a>
            <a class="next2" onclick="changeSlide(1, 'slideshowmarais')">&#10095;</a>
            <div class="dots-container2">
                <span class="dot2" onclick="currentSlide(1, 'slideshowmarais')"></span>
                <span class="dot2" onclick="currentSlide(2, 'slideshowmarais')"></span>
                <span class="dot2" onclick="currentSlide(3, 'slideshowmarais')"></span>
            </div>
        </div>
        <button class="toggle-details-button" onclick="toggleDetails('marais')">Voir les détails de cet habitat</button>
        <div class="habitat-details hidden" id="details-marais">
            <p class="narrow-paragraph">Les marais sont des zones humides dominées par la présence constante de l'eau, créant des paysages riches en végétation aquatique. Ils abritent des espèces uniques telles que les crocodiles et les flamants roses, parfaitement adaptées à ces conditions spécifiques. Ces écosystèmes jouent un rôle vital en filtrant l'eau et en offrant des habitats essentiels pour une grande variété d'animaux.</p>
        </div>
        <div class="dropdown">
            <button class="dropdown-button" id="button3">Afficher les animaux des marais !</button>
            <div class="dropdown-content" id="Images3">
                <a href="Page_animaux.php?animal=flavie_le_flamant_rose">
                    <img src="Image ECF/Image flamants rose 2.jpg" alt="Flavie le flamant rose" class="dropdown-image">
                    <p> Le flamant rose </p>
                </a>
                <a href="Page_animaux.php?animal=horatio_hippopotame">
                    <img src="Image ECF/Image hippo 2.jpg" alt="Horatio l'hippopotame" class="dropdown-image">
                    <p> L'hippopotame </p>
                </a>
                <a href="Page_animaux.php?animal=Rayan_le_ragondin">
                    <img src="Image ECF/Image ragondin 1.jpg" alt="Rayan le ragondin" class="dropdown-image">
                    <p> Le ragondin </p>
                </a>
                <a href="Page_animaux.php?animal=Crycrie_le_crocodile">
                    <img src="Image ECF/gros-plan-alligator-sable_649448-4938.jpg" alt="Crycrie le crocodile" class="dropdown-image">
                    <p> Le crocodile </p>
                </a>
                <a href="Page_animaux.php?animal=Franklin_la_tortue">
                    <img src="Image ECF/tortue-eperonnee-africaine-dans-herbe_167946-113.jpg" alt="Franklin la tortue" class="dropdown-image">
                    <p> La tortue </p>
                </a>
            </div>
        </div>
    </section>

<!-- Début du Footer -->
<footer>
    <p>© 2024 Zoo Arcadia - Tous droits réservés.</p>
    <p>
        <a href="#">Mentions légales</a> |
        <a href="#">Politique de confidentialité</a> |
        <a href="Page_contact.html">Contactez-nous</a>
    </p>
</footer>
<!-- Fin du Footer -->

<script src="Javascript page accueil.js"></script>
</body>
</html>