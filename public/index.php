<?php include 'session.php'; ?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Arcadia</title>
    
    <!-- Lien vers la feuille de style principale -->
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
    <a href="Page_contact.php"></a>

    <a href="submit_review.php"></a>
    <a href="database.php"></a>
    <a href="page-connexion.php"></a>

    <!-- Lien vers les polices Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap" rel="stylesheet">
</head>
<body>

<!-- Début de la section Header -->
<header>
    <!-- Logo du Zoo -->
    <a href="index.php">
        <img src="Image ECF/Designer__41_-removebg-preview.png" alt="Logo du Zoo">
    </a>

    <!-- Menu burger pour mobile -->
    <span class="menu-burger" onclick="toggleMenu()">&#9776;</span>

    <!-- Navigation principale -->
    <nav id="menu">
        <a href="index.php" class="active">Accueil</a>
        <a href="Page habitats.php">Habitats</a>
        <a href="Page services.php">Services</a>
        <a href="Page_animaux.php">Animaux</a>
        <a href="Page_contact.html">Contact</a>
    </nav>

    <!-- Icône de connexion ou déconnexion -->
    <div class="login">
        <?php if (isset($_SESSION['role'])): ?>
            <!-- Afficher le bouton de déconnexion si l'utilisateur est connecté -->
            <a href="#" onclick="document.getElementById('logout-form').submit();">Déconnexion</a>
            <form id="logout-form" action="logout.php" method="post" style="display: none;">
                <input type="hidden" name="action" value="logout">
            </form>
            <!-- Bouton pour accéder au tableau de bord admin -->
            <?php if ($_SESSION['role'] === 'Administrateur'): ?>
                <a href="admin-dashboard.php" class="admin-dashboard-button">Tableau de bord</a>
            <?php endif; ?>
        <?php else: ?>
            <!-- Afficher l'icône de connexion si l'utilisateur n'est pas connecté -->
            <img src="Image ECF/Login logo.png" alt="Connexion" class="login-icon" onclick="openModal()">
        <?php endif; ?>
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












<!-- Début du diaporama -->
<div class="slideshow-container">
    <div class="slides-wrapper" id="slidesWrapper">
        <!-- Chaque diapositive du diaporama -->
        <div class="slides"><img src="Image ECF/Image tigre 1.jpg" alt="Image 1"></div>
        <div class="slides"><img src="Image ECF/Image zebre 3.jpg" alt="Image 2"></div>
        <div class="slides"><img src="Image ECF/Image flamants rose 1.jpg" alt="Image 3"></div>
    </div>

    <!-- Flèches pour naviguer entre les diapositives -->
    <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
    <a class="next" onclick="changeSlide(1)">&#10095;</a>
</div>

<!-- Points indicateurs pour le diaporama -->
<div class="dots-container">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<!-- Fin du diaporama -->

<!-- Début de la section Présentation -->
<section id="presentation">
    <div class="container">
        <!-- Images à gauche -->
        <div class="left-images">
            <img src="Image ECF/pexels-tomfisk-9893729.jpg" alt="Image 1" class="round-image">
            <img src="Image ECF/pexels-akilmazumder-1072824.jpg" alt="Image 2" class="round-image">
        </div>

        <!-- Texte de présentation du zoo -->
        <div class="centered-text">
            <h2>Présentation du Zoo</h2>
            <p>Le zoo Arcadia, niché près de la forêt de Brocéliande en Bretagne, est un véritable sanctuaire pour la faune sauvage. Chaque animal y évolue dans des habitats recréés avec soin, qu'il s'agisse de la savane, de la jungle ou des marais. Le bien-être animal est une priorité absolue : des vétérinaires veillent quotidiennement à leur santé et à leur alimentation équilibrée. Mais ce qui rend Arcadia unique, c'est son engagement écologique. Totalement autonome en énergie grâce aux sources renouvelables, le zoo met l'écologie au cœur de son fonctionnement, offrant une expérience respectueuse de la nature et de ses habitants. Arcadia incarne un modèle de durabilité, où la protection de l'environnement et le bien-être animal vont de pair, pour un avenir en harmonie avec la planète.</p>
        </div>

        <!-- Images à droite -->
        <div class="right-images">
            <img src="Image ECF/pexels-goran-vrakela-64248-615277.jpg" alt="Image 3" class="round-image">
            <img src="Image ECF/veterinaire-tient-doucement-jeune-tigre-examine_14117-891372.jpg" alt="Image 4" class="round-image">
        </div>
    </div>
</section>
<!-- Fin de la section Présentation -->




<!-- Début de la section Habitats -->
<section id="habitats">
    <h2>Nos Habitats</h2>
    <div class="habitats">
    
    <!-- Habitat de la Savane -->
    <div class="habitat-content">
        <img src="Image ECF/Image savane 1.jpg" alt="Habitat Savane">
        <a href="Page habitats.php#savane" class="habitat-link">
            <h3>La Savane</h3>
        </a>
        <p>Découvrez les animaux majestueux de la savane, un écosystème de grandes étendues herbeuses parsemées d'arbres
            clairsemés.</p>

        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'Administrateur'): ?>
            <!-- Bouton pour éditer le contenu -->
            <a href="edit_habitat.php?id=savane" class="edit-button">Modifier</a>
        <?php endif; ?>
    </div>

    <!-- Habitat de la Jungle -->
    <div class="habitat-content">
        <img src="Image ECF/Image jungle 2.jpg" alt="Jungle">
        <a href="Page habitats.php#jungle" class="habitat-link">
            <h3>La Jungle</h3>
        </a>
        <p>La jungle est une forêt tropicale dense et luxuriante, caractérisée par une biodiversité riche et une végétation
            épaisse.</p>

        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'Administrateur'): ?>
            <!-- Bouton pour éditer le contenu -->
            <a href="edit_habitat.php?id=jungle" class="edit-button">Modifier</a>
        <?php endif; ?>
    </div>

    <!-- Habitat des Marais -->
    <div class="habitat-content">
        <img src="Image ECF/Image marais 1.jpg" alt="Le Marais">
        <a href="Page habitats.php#marais" class="habitat-link">
            <h3>Le Marais</h3>
        </a>
        <p>Les marais sont des milieux humides où l'eau stagnante favorise une végétation spécialisée et un habitat vital
            pour diverses espèces animales.</p>

        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'Administrateur'): ?>
            <!-- Bouton pour éditer le contenu -->
            <a href="edit_habitat.php?id=marais" class="edit-button">Modifier</a>
        <?php endif; ?>
    </div>
</div>
</section>
<!-- Fin de la section Habitats -->






<!-- Début de la section Services -->
<section id="services">
    <h2>Nos Services</h2>
    <div class="services">
        <!-- Service : Restaurant -->
        <div>
            <img src="Image ECF\pexels-reneterp-1581384.jpg" alt="Restaurant">
            <a href="Page services.php" class="service-link">
                <h3>Restaurant</h3></a>
        </div>
        <!-- Service : Visite Guidée -->
        <div>
            <img src="Image ECF\Guide zoo.jpg" alt="Visite guidée">
            <a href="Page services.php" class="service-link">
                <h3>Visite Guidée</h3></a>
        </div>
        <!-- Service : Train -->
        <div>
            <img src="Image ECF\train-excursion-punkva-caves-outdoor-260nw-2169598517.jpg" alt="Petit train">
            <a href="Page services.php" class="service-link">
                <h3>Petit train</h3></a>
        </div>

        
    </div>
</section>
<!-- Fin de la section Services -->





<!-- Début de la section Animaux -->
<section id="animaux">
    <h2>Nos Animaux</h2>
    <div class="animals-grid">
        <div class="animal-item">
            <a href="Page_animaux.php?animal=leo_le_lion">
                <img src="Image ECF\pexels-gareth-davies-230510-1598377.jpg" alt="Léo le lion">
                <p>Léo le lion</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=zozo_le_zebre">
                <img src="Image ECF\Image zebre 1.jpg" alt="Zozo le zèbre">
                <p>Zozo le zèbre</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=peter_le_perroquet">
                <img src="Image ECF\Image perroquet 2.jpg" alt="Peter le perroquet">
                <p>Peter le perroquet</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=paul_le_panda_roux">
                <img src="Image ECF\Image panda roux 1.jpg" alt="Paul le panda roux">
                <p>Paul le panda roux</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=ronan_le_rhinoceros">
                <img src="Image ECF\pexels-ellie-burgin-1661546-13147987.jpg" alt="Ronan le rhinocéros">
                <p>Ronan le rhinocéros</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=flavie_le_flamant_rose">
                <img src="Image ECF\Image flamants rose 2.jpg" alt="Flavie le flamant rose">
                <p>Flavie le flamant rose</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=gigie_la_giraffe">
                <img src="Image ECF\Image giraffe 1.jpg" alt="Gigie la giraffe">
                <p>Gigie la giraffe</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=gerard_le_gorille">
                <img src="Image ECF\Image Gorille 1.jpg" alt="Gérard le gorille">
                <p>Gérard le gorille</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=elie_lelephant">
                <img src="Image ECF\Image éléphant 2.jpg" alt="Elie l'éléphant">
                <p>Elie l'éléphant</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=serge_le_serpent">
                <img src="Image ECF\Image serpent 1.jpg" alt="Serge le serpent">
                <p>Serge le serpent</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=charlyne_le_chimpanze">
                <img src="Image ECF\Image chimpaze 1.jpg" alt="Charlyne le chimpanzé">
                <p>Charlyne le chimpanzé</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=benoit_le_buffle">
                <img src="Image ECF\Image Buffle 1.jpg" alt="Benoit le buffle">
                <p>Benoit le buffle</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=pathie_la_panthere_noire">
                <img src="Image ECF\panthere-elegante-agile-rodant-dans-broussailles-denses-furtivite-grace_1268-35055.jpg" alt="Pathie la panthère noire">
                <p>Pathie la panthère noire</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=horatio_lhippopotame">
                <img src="Image ECF\Image hippo 2.jpg" alt="Horatio l'hippopotame">
                <p>Horatio l'hippopotame</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=theo_le_tigre">
                <img src="Image ECF\Image tigre 2.jpg" alt="Théo le tigre">
                <p>Théo le tigre</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=rayan_le_ragondin">
                <img src="Image ECF\Image ragondin 1.jpg" alt="Rayan le ragondin">
                <p>Rayan le ragondin</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=crycrie_le_crocodile">
                <img src="Image ECF\gros-plan-alligator-sable_649448-4938.jpg" alt="Crycrie le crocodile">
                <p>Crycrie le crocodile</p>
            </a>
        </div>
        <div class="animal-item">
            <a href="Page_animaux.php?animal=franklin_la_tortue">
                <img src="Image ECF\tortue-eperonnee-africaine-dans-herbe_167946-113.jpg" alt="Franklin la tortue">
                <p>Franklin la tortue</p>
            </a>
        </div>
</section>
<!-- Fin de la section Animaux -->





<!-- Début de la section Avis -->
<section id="avis-visiteurs">
    <h2>Avis des Visiteurs</h2>
    <div class="avis-carousel">
        <button class="carousel-button prev" onclick="moveSlide(-1)">&#10094;</button>
        <div class="avis-container">
            <div class="avis-grid">
                <div class="avis-item">
                    <div class="stars">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p>"C'était une expérience incroyable, les animaux sont bien soignés et le personnel est très accueillant!"</p>
                    <span>- Jean Dupont</span>
                </div>
                <div class="avis-item">
                    <div class="stars">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p>"Un super moment passé avec les enfants. Le zoo est très bien entretenu et éducatif."</p>
                    <span>- Marie Lefevre</span>
                </div>
                <div class="avis-item">
                    <div class="stars">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p>"Une visite enrichissante, des espèces fascinantes et un cadre magnifique. Je recommande!"</p>
                    <span>- Paul Martin</span>
                </div>
                <div class="avis-item">
                    <div class="stars">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p>"Un excellent endroit pour passer la journée en famille. Les enfants ont adoré voir les lions de près!"</p>
                    <span>- Sophie Bernard</span>
                </div>
                <!-- Répétition des avis pour permettre le défilement -->
                <div class="avis-item">
                    <div class="stars">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p>"C'était une expérience incroyable, les animaux sont bien soignés et le personnel est très accueillant!"</p>
                    <span>- Jean Dupont</span>
                </div>
                <div class="avis-item">
                    <div class="stars">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p>"Un super moment passé avec les enfants. Le zoo est très bien entretenu et éducatif."</p>
                    <span>- Marie Lefevre</span>
                </div>
                <div class="avis-item">
                    <div class="stars">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p>"Une visite enrichissante, des espèces fascinantes et un cadre magnifique. Je recommande!"</p>
                    <span>- Paul Martin</span>
                </div>
                <div class="avis-item">
                    <div class="stars">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p>"Un excellent endroit pour passer la journée en famille. Les enfants ont adoré voir les lions de près!"</p>
                    <span>- Sophie Bernard</span>
                </div>
            </div>
        </div>
        <button class="carousel-button next" onclick="moveSlide(1)">&#10095;</button>
    </div>
</section>
<!-- Fin de la section Avis -->



<section id="leave-review">
    <h2>Laissez-nous votre avis</h2>
    <form action="submit_review.php" method="POST">
        <label for="name">Nom : <span class="required">*</span></label>
        <input type="text" id="name" name="name" required>

        <label for="rating">Note :</label>
        <div class="star-rating" id="star-rating">
            <span class="star" data-value="5">&#9733;</span>
            <span class="star" data-value="4">&#9733;</span>
            <span class="star" data-value="3">&#9733;</span>
            <span class="star" data-value="2">&#9733;</span>
            <span class="star" data-value="1">&#9733;</span>
        </div>
        <input type="hidden" id="rating" name="rating" value="5" required>

        <label for="review">Votre avis : <span class="required">*</span></label>
        <textarea id="review" name="review" rows="4" required></textarea>

        <input type="submit" value="Soumettre l'avis">
    </form>
</section>


  
  
  
  

<!-- Informations Utiles (au-dessus du footer) -->
<div class="footer-info">
    <div class="zoo-hours">
      <h3>Horaires du Zoo</h3>
      <p>Lundi - Vendredi : 9h00 - 18h00</p>
      <p>Samedi - Dimanche : 9h00 - 19h00</p>
      <p>Fermé le 25 décembre et le 1er janvier</p>
    </div>
  
    <!-- Section des informations d'adresse -->
    <div class="contact-info">
      <p>Adresse : 123 Rue du zoo, Brocéliande, France</p>
      
      <!-- Intégration de la carte Google Maps -->
      <div class="map-container">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.902053916086!2d2.292292515673342!3d48.85884407928788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fef64f16f93%3A0x423aecfcc1e29a0!2sEiffel%20Tower!5e0!3m2!1sen!2sfr!4v1618835941100!5m2!1sen!2sfr" 
          width="600" 
          height="450" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
  
  <!-- Début du Footer -->
  <footer>
    <!-- Autres Sections du Footer -->
    <div class="footer-content">
      <p>© 2024 Zoo Arcadia - Tous droits réservés.</p>
        <a href="#">Mentions légales</a> |
        <a href="#">Politique de confidentialité</a> |
        <a href="Page_contact.html">Contactez-nous</a>
      </p>
    </div>
  </footer>
  
  <!-- Fin du Footer -->
  
  

<!-- Lien vers le script JavaScript -->
<script src="Javascript page accueil.js"></script>

</body>
</html>
