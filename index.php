<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Feuille CSS -->
    <link rel="stylesheet" href="./css/style.scss" />
    <link rel="stylesheet" href="./css/_variables.scss" />
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <!-- Icon Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./img/Netflix_icon.svg.webp" />
    <title>Netflix | Accueil</title>
  </head>
  <body>
    <header>
      <?php
        include('./common/menu.php')
      ?>
      <!-- Carousel -->
      <div id="banner">
        <iframe
          src="https://www.youtube.com/embed/dXRHyzj3AFc?si=S5K-uZoW2G8XWHt8&amp;controls=0&amp;autoplay=1&amp;mute=1"
          allow="autoplay; fullscreen"
          style="width: 100%; height: 100%; border: none"
        >
        </iframe>
      </div>
    </header>
    <main>
      <div class="description-banner">
        <p>
        <img src="./img/top-10.png" alt="">  
        <span>N°2 des séries TV aujourd'hui</span></p>
        <p>
          Quand un jeune garçon disparaît, une petite ville découvre une affaire
          mystérieuse, des expériences secrètes, des forces surnaturelles
          terrifiantes... et une fillette. Watch all you want. Cet hommage aux
          classiques de l'horreur et de la SF des années 80 a reçu des dizaines
          de nominations aux Emmys.
        </p>
      <div class="btn-banner">
          <a href="#">Lecture</a>
          <a href="#">Plus d'infos</a>
        </div>
      </div>
      <section class="content-library">
        <!-- Seulement sur Netflix -->
        <!--
        <div>
          <p>Seulement sur Netflix</p>
          <div id="carouselExample1" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="Movies">
                  <img
                    src="./img/mercredi.png"
                    class="d-block w-100"
                    alt="..."
                  />

                  <img
                    src="./img/Squidgame.png"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img
                    src="./img/Spiderman.png"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img src="./img/Alice.png" class="d-block w-100" alt="..." />
                  <img
                    src="./img/stranger_things.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img
                    src="./img/stranger_things.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img
                    src="./img/stranger_things.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
              </div>
              <div class="carousel-item">
                <div class="Movies">
                  <img
                    src="./img/trainingDay.png"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img src="./img/Alice.png" class="d-block w-100" alt="..." />
                  <img
                    src="./img/stranger_things.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img
                    src="./img/Squidgame.png"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img
                    src="./img/Spiderman.png"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img
                    src="./img/stranger_things.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img
                    src="./img/stranger_things.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img
                    src="./img/stranger_things.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
              </div>
              <div class="carousel-item">
                <div class="Movies">
                  <img
                    src="./img/stranger_things.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img
                    src="./img/trainingDay.png"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img src="./img/Alice.png" class="d-block w-100" alt="..." />
                  <img
                    src="./img/Squidgame.png"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img
                    src="./img/Spiderman.png"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img
                    src="./img/stranger_things.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img
                    src="./img/stranger_things.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <img
                    src="./img/stranger_things.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExample1"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExample1"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>!-->
        <h2>On pense que vous allez adorer...</h2>
        <div class="row-container">
          <div class="slider">
            <ul class="pagination-indicator">
              <li class="active"></li>
              <li class=""></li>
              <li class=""></li>
              <li class=""></li>
              <li class=""></li>
              <li class=""></li>
              <li class=""></li>
            </ul>
            <div class="sliderMask">
              <div class="slider-item slider-item-0">
                <img src="./img/the-night-agent.jpg" alt="">
              </div>
              <div class="slider-item slider-item-0">
                <img src="./img/the-night-agent.jpg" alt="">
              </div>
              <div class="slider-item slider-item-0">
                <img src="./img/the-night-agent.jpg" alt="">
              </div>
              <div class="slider-item slider-item-0">
                <img src="./img/the-night-agent.jpg" alt="">
              </div>
              <div class="slider-item slider-item-0">
                <img src="./img/the-night-agent.jpg" alt="">
              </div>
              <div class="slider-item slider-item-0">
                <img src="./img/the-night-agent.jpg" alt="">
              </div>
              <div class="slider-item slider-item-0">
                <img src="./img/the-night-agent.jpg" alt="">
              </div>
              <div class="slider-item slider-item-0">
                <img src="./img/the-night-agent.jpg" alt="">
              </div>
              <div class="slider-item slider-item-0">
                <img src="./img/the-night-agent.jpg" alt="">
              </div>
            
            </div>
        </div>

        </div>
    
      </div>
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
