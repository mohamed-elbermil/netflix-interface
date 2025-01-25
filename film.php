<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Feuille CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/variables.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Icon Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./img//favicon.png">
    <title>Netflix | Accueil</title>
</head>
<body>
    <header>
    <?php
        include('./common/menu.php')
      ?>
        <section class="banniere_film">
            <div class="coverNtext">
            <a href="https://www.youtube.com/watch?v=h0ceRxg6YKc" target="_blank"><img src="./img/cover.jpg" alt=""></a> 
            </div>
        </section>
    </header>
    <main>
        <video class="video-bg" autoplay loop muted>
            <source src="./img/stranger.mp4" type="video/mp4" class="video-bg" >
        </video>
    <div class="critiqueNtext">
        <div class="critique">
            <div class="imgNtext">
                <i class="fa-solid fa-pen"></i>                
                <p>Ecrire une critique</p>
            </div>
            <div class="imgNtext">
                <i class="fa-solid fa-eye"></i>                
                <p>Vue</p>
            </div>
            <div class="imgNtext">
                <i class="fa-solid fa-thumbs-up"></i>            
                <p>Envie de la voir</p>
            </div>
            <div class="imgNtext">
                <i class="fa-solid fa-spinner"></i>                
                <p>En cours</p>
            </div>
            <div class="imgNtext">
                <i class="fa-solid fa-heart"></i>   
                <p>Coup de coeur</p>
            </div>
            <div class="img_critique">
                <img src="./img/stranger2.jpg" alt="">
                <img src="./img/stranger_things.jpg" alt="">
            </div>
        </div>
        <div class="trailerserie">
            <h1>Synopsie</h1>
            <p>Une menace surnaturelle plane sur Hawkins, car une nouvelle organisation semble s'intéresser aux événements qui se sont produits dans la ville. Pendant ce temps, Nancy et Jonathan travaillent ensemble au Hawkins Post et enquêtent sur une conspiration en cours. Steve et Robin travaillent dans un centre commercial, où ils découvrent une mystérieuse salle secrète sous les coulisses. Des événements étranges se produisent également dans la maison de Joyce, qui est hantée par de souvenirs du passé. Alors que les adolescents tentent de percer le mystère qui se cache derrière ces événements, ils se rendent compte que quelque chose de plus grand et plus dangereux se prépare à Hawkins. La saison 4 de Stranger Things est plus sombre et plus intense que les précédentes, avec de nouveaux personnages et de nouveaux enjeux. Les fans peuvent s'attendre à un retour aux sources de la série, avec des références aux années 80, de l'action, du suspense et des rebondissements inattendus.</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/h0ceRxg6YKc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</button>
    </main>
    <footer>
        <div class="bloc_footer">
            <div class="reseaux">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-twitter"></i>
                <i class="bi bi-youtube"></i>
            </div>
            <p>Audiodescription</p>
            <p>Relations Investisseurs</p>
            <p>Confidentialité</p>
            <p>Nous contacter</p>
        </div>
        <div class="bloc_footer">
            <p>Centre d'aide</p>
            <p>Recrutement</p>
            <p>Informations légales</p>
            <p>Choix liés à la pub</p>
        </div>
        <div class="bloc_footer">
            <p>Cartes cadeaux</p>
            <p>Boutique Netflix</p>
            <p>Préférences de cookies</p>
        </div>
        <div class="bloc_footer">
            <p>Presse</p>
            <p>Conditions d'utilisation</p>
            <p>Mentions légales</p>
        </div>
    </footer>
</body>
</html>