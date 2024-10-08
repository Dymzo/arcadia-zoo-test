<?php include 'session.php'; ?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Animaux - Zoo Arcadia</title>
    <link href="CSS page animaux.css" rel="stylesheet" />

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
        <a href="Page services.php" >Services</a>
        <a href="Page_animaux.php" class="active">Animaux</a>
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



<!-- Début de la section Animaux -->
<section id="animaux">
    <h2>Nos Animaux</h2>
    <div class="animals-grid"> 
        <div class="animal-item" onclick="openAnimalModal('Léo le lion', ['Image ECF/Image lion 1.jpg', 'Image ECF/Image lion 2.jpg'], 'Lion', 'Savane', 'En bonne santé', '5 ans', 'Viande', '2 kg', '15/08/2024', 'Examen complet effectué.', 1)">
            <img src="Image ECF/pexels-gareth-davies-230510-1598377.jpg" alt="Léo le lion">
            <p>Léo le lion</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Zozo le zèbre', ['Image ECF/Image zebre 1.jpg', 'Image ECF/Image zebre 2.jpg'], 'Zèbre', 'Savane', 'En bonne santé', '4 ans', 'Herbe', '3 kg', '12/09/2024', 'Examen de routine effectué.', 2)">
            <img src="Image ECF/Image zebre 1.jpg" alt="Zozo le zèbre">
            <p>Zozo le zèbre</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Peter le perroquet', ['Image ECF/Image perroquet 2.jpg', 'Image ECF/Image perroquet 1.jpg'], 'Perroquet', 'Jungle', 'En bonne santé', '2 ans', 'Fruits', '500 g', '10/08/2024', 'Examen complet effectué.', 3)">
            <img src="Image ECF/Image perroquet 2.jpg" alt="Peter le perroquet">
            <p>Peter le perroquet</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Paul le panda roux', ['Image ECF/Image panda roux 1.jpg', 'Image ECF/Image panda roux 2.jpg'], 'Panda roux', 'Jungle', 'En bonne santé', '6 ans', 'Bambou', '1 kg', '20/08/2024', 'Examen complet effectué.', 4)">
            <img src="Image ECF/Image panda roux 1.jpg" alt="Paul le panda roux">
            <p>Paul le panda roux</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Ronan le rhinocéros', ['Image ECF/pexels-ellie-burgin-1661546-13147987.jpg', 'Image ECF/Image rhinoceros 2.jpg'], 'Rhinocéros', 'Savane', 'En bonne santé', '7 ans', 'Herbe', '5 kg', '05/08/2024', 'Examen complet effectué.', 5)">
            <img src="Image ECF/pexels-ellie-burgin-1661546-13147987.jpg" alt="Ronan le rhinocéros">
            <p>Ronan le rhinocéros</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Flavie le flamant rose', ['Image ECF/Image flamants rose 2.jpg', 'Image ECF/Image flamants rose 1.jpg'], 'Flamant rose', 'Marais', 'En bonne santé', '3 ans', 'Algues', '200 g', '22/07/2024', 'Examen de routine effectué.', 6)">
            <img src="Image ECF/Image flamants rose 2.jpg" alt="Flavie le flamant rose">
            <p>Flavie le flamant rose</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Gigie la giraffe', ['Image ECF/Image giraffe 1.jpg', 'Image ECF/Image giraffe 2.jpg'], 'Giraffe', 'Savane', 'En bonne santé', '8 ans', 'Feuilles', '4 kg', '18/08/2024', 'Examen complet effectué.', 7)">
            <img src="Image ECF/Image giraffe 1.jpg" alt="Gigie la giraffe">
            <p>Gigie la giraffe</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Gérard le gorille', ['Image ECF/Image Gorille 1.jpg', 'Image ECF/Image Gorille 2.jpg'], 'Gorille', 'Jungle', 'En bonne santé', '9 ans', 'Fruits', '1.5 kg', '25/08/2024', 'Examen complet effectué.', 8)">
            <img src="Image ECF/Image Gorille 1.jpg" alt="Gérard le gorille">
            <p>Gérard le gorille</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Elie l\'éléphant', ['Image ECF/Image éléphant 2.jpg', 'Image ECF/Image éléphant 1.jpg'], 'Éléphant', 'Savane', 'En bonne santé', '10 ans', 'Herbe', '8 kg', '30/08/2024', 'Examen complet effectué.', 9)">
            <img src="Image ECF/Image éléphant 2.jpg" alt="Elie l'éléphant">
            <p>Elie léléphant</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Serge le serpent', ['Image ECF/Image serpent 1.jpg', 'Image ECF/Image serpent 2.jpg'], 'Serpent', 'Jungle', 'En bonne santé', '3 ans', 'Rongeurs', '300 g', '28/08/2024', 'Examen de routine effectué.', 10)">
            <img src="Image ECF/Image serpent 1.jpg" alt="Serge le serpent">
            <p>Serge le serpent</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Charlyne le chimpanzé', ['Image ECF/Image chimpaze 1.jpg', 'Image ECF/Image chimpaze 2.jpg'], 'Chimpanzé', 'Jungle', 'En bonne santé', '12 ans', 'Fruits', '2 kg', '15/09/2024', 'Examen complet effectué.', 11)">
            <img src="Image ECF/Image chimpaze 1.jpg" alt="Charlyne le chimpanzé">
            <p>Charlyne le chimpanzé</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Benoit le buffle', ['Image ECF/Image Buffle 1.jpg', 'Image ECF/Image Buffle 2.jpg'], 'Buffle', 'Savane', 'En bonne santé', '6 ans', 'Herbe', '4 kg', '02/09/2024', 'Examen de routine effectué.', 12)">
            <img src="Image ECF/Image Buffle 1.jpg" alt="Benoit le buffle">
            <p>Benoit le buffle</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Pathie la panthère noire', ['Image ECF/panthere-elegante-agile-rodant-dans-broussailles-denses-furtivite-grace_1268-35055.jpg', 'Image ECF/panthere-noire-2.jpg'], 'Panthère noire', 'Jungle', 'En bonne santé', '7 ans', 'Viande', '3 kg', '01/08/2024', 'Examen complet effectué.', 13)">
            <img src="Image ECF/panthere-elegante-agile-rodant-dans-broussailles-denses-furtivite-grace_1268-35055.jpg" alt="Pathie la panthère noire">
            <p>Pathie la panthère noire</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Horatio hippopotame', ['Image ECF/Image hippo 2.jpg', 'Image ECF/Image hippo 1.jpg'], 'Hippopotame', 'Marais', 'En bonne santé', '10 ans', 'Herbe', '6 kg', '03/09/2024', 'Examen de routine effectué.', 14)">
            <img src="Image ECF/Image hippo 2.jpg" alt="Horatio l'hippopotame">
            <p>Horatio hippopotame</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Théo le tigre', ['Image ECF/Image tigre 2.jpg', 'Image ECF/Image tigre 1.jpg'], 'Tigre', 'Jungle', 'En bonne santé', '5 ans', 'Viande', '2.5 kg', '10/09/2024', 'Examen complet effectué.', 15)">
            <img src="Image ECF/Image tigre 2.jpg" alt="Théo le tigre">
            <p>Théo le tigre</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Rayan le ragondin', ['Image ECF/Image ragondin 1.jpg', 'Image ECF/Image ragondin 2.jpg'], 'Ragondin', 'Marais', 'En bonne santé', '2 ans', 'Végétaux', '200 g', '08/09/2024', 'Examen de routine effectué.', 16)">
            <img src="Image ECF/Image ragondin 1.jpg" alt="Rayan le ragondin">
            <p>Rayan le ragondin</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Crycrie le crocodile', ['Image ECF/gros-plan-alligator-sable_649448-4938.jpg', 'Image ECF/Image crocodile 2.jpg'], 'Crocodile', 'Marais', 'En bonne santé', '6 ans', 'Poissons', '1 kg', '11/09/2024', 'Examen complet effectué.', 17)">
            <img src="Image ECF/gros-plan-alligator-sable_649448-4938.jpg" alt="Crycrie le crocodile">
            <p>Crycrie le crocodile</p>
        </div>
        <div class="animal-item" onclick="openAnimalModal('Franklin la tortue', ['Image ECF/tortue-eperonnee-africaine-dans-herbe_167946-113.jpg', 'Image ECF/Image tortue 2.jpg'], 'Tortue', 'Savane', 'En bonne santé', '15 ans', 'Végétaux', '100 g', '09/09/2024', 'Examen complet effectué.', 18)">
            <img src="Image ECF/tortue-eperonnee-africaine-dans-herbe_167946-113.jpg" alt="Franklin la tortue">
            <p>Franklin la tortue</p>
        </div>
    </div>
    
    </div>
</section>

<!-- Fin de la section Animaux -->


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



<div id="animalModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeAnimalModal()">&times;</span>
        <div class="modal-image-container">
            <button class="nav-button prev" onclick="prevImage()">&#10094;</button>
            <img id="modalImage" src="" alt="Animal">
            <button class="nav-button next" onclick="nextImage()">&#10095;</button>
        </div>
        <div class="modal-info">
            <h3 id="modalName"></h3>
            <p><strong>Espèce :</strong> <span id="modalSpecies"></span></p>
            <p><strong>Habitat :</strong> <span id="modalHabitat"></span></p>
            <p><strong>État de santé :</strong> <span id="modalHealth"></span></p>
            <p><strong>Âge :</strong> <span id="modalAge"></span></p>
            <p><strong>Régime alimentaire :</strong> <span id="modalDiet"></span></p>
            <p><strong>Quantité de nourriture :</strong> <span id="modalFoodAmount"></span></p>
            <p><strong>Date de dernière visite :</strong> <span id="modalVisitDate"></span></p>
            <p><strong>Notes :</strong> <span id="modalNotes"></span></p>
        </div>
    </div>
</div>




<script src="Javascript page animaux.js"></script>
</body>
</html>
