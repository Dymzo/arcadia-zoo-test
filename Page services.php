<?php include 'session.php'; ?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services - Zoo Arcadia</title>
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
        <a href="Page habitats.php">Habitats</a>
        <a href="Page services.php" class="active">Services</a>
        <a href="Page_animaux.php">Animaux</a>
        <a href="Page_contact.html">Contact</a>
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


<!-- Début de la section Services -->
<section id="services">
    <h2>Nos Services</h2>
    <div class="services">
        <!-- Service : Restaurant -->
        <div class="service-item">
            <img src="Image ECF\pexels-reneterp-1581384.jpg" alt="Restaurant">
            <h3>Restaurant</h3>
            <button class="show-more">En savoir plus</button>
            <p class="description">Savourez des repas de qualité supérieure dans notre restaurant au cœur du zoo. Nous proposons une gamme variée de plats délicieux pour tous les goûts, des collations légères aux repas gourmands. Profitez de notre ambiance conviviale tout en observant les animaux dans leur habitat naturel. Nous proposons également des sandwichs, paninis et autres snacks à emporter pour profiter de votre repas lors de vos promenades dans le zoo. Nos chefs utilisent des ingrédients frais et locaux pour garantir une expérience authentique. Venez vivre un moment culinaire exceptionnel et enrichissant !</p>
            <div class="image-gallery">
               <img src="Image ECF\deux-sandwichs-fraichement-prepares-baguettes-croustillantes-remplies-tomates-jambon-laitue-oignons-planche-couper-bois_600978-17440.jpg" alt="Image sandwich">
               <img src="Image ECF\pexels-enginakyurt-3219483 (1).jpg" alt="Image burger">
               <img src="Image ECF\pexels-valeriya-1860208.jpg" alt="Image salade ">
               <img src="Image ECF\pexels-goumbik-1352274.jpg" alt="Image Repas enfants">
               <img src="Image ECF\salade.webp" alt="Image Salade">
               <img src="Image ECF\pexels-weekendplayer-735869.jpg" alt="Image assiete">
            </div>
            <!-- Ligne pour les horaires -->
    <div class="service-hours">
        <p>Horaires : 9h30 - 17h30</p> 
    </div>
        </div>
        <!-- Service : Visite Guidée -->
        <div class="service-item">
            <img src="Image ECF\Guide zoo.jpg" alt="Visite guidée">
            <h3>Visite Guidée</h3>
            <button class="show-more">En savoir plus</button>
            <p class="description">Plongez au cœur de notre zoo avec une visite guidée gratuite et enrichissante. Nos guides passionnés vous emmèneront à la découverte des animaux et de leur habitat tout en vous partageant des informations fascinantes. Apprenez des anecdotes captivantes et des faits intéressants sur nos résidents tout en explorant le zoo de manière interactive et informative. Profitez de cette occasion unique pour enrichir votre expérience et voir le zoo sous un nouvel angle. Une expérience éducative et mémorable vous attend !</p>
         <!-- Ligne pour les horaires -->
          <div class="service-hours">
      <p>Horaires : 9h00 - 18h00</p> 
      </div>
        </div>
        <!-- Service : Train -->
        <div class="service-item">
            <img src="Image ECF\train-excursion-punkva-caves-outdoor-260nw-2169598517.jpg" alt="Petit train">
            <h3>Petit train</h3>
            <button class="show-more">En savoir plus</button>
            <p class="description">Montez à bord de notre petit train pour une balade agréable et panoramique à travers le zoo. Profitez d'une vue imprenable sur les différents habitats et animaux tout en étant confortablement installé. Cette excursion vous permet de découvrir les merveilles du zoo de manière relaxante et amusante, idéale pour toute la famille. Que vous soyez un visiteur curieux ou simplement à la recherche d’un moment de détente, notre petit train est le moyen parfait pour explorer le zoo en toute tranquillité.</p>
            <!-- Ligne pour les horaires -->
        <div class="service-hours">
            <p> Prix : 5€ par personne pour la journée !  (gratuit pour les enfants de moins de 12 ans)</p>
        <p>Horaires : 9h30 - 17h30</p> 
    </div>
        </div>
    </div>
</section>
<!-- Fin de la section Services -->


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
