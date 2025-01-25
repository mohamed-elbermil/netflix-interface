// Données du carousel
const carousel = [
    { title: "Image 1", imageUrl: "./img/Zorro.png" },
    { title: "Image 2", imageUrl: "./img/breakingbad.png" },
    { title: "Image 3", imageUrl: "./img/fastNfurious.png" },
    { title: "Image 4", imageUrl: "./img/spiderman1.png" },
    { title: "Image 5", imageUrl: "./img/mercredi.png" },
    { title: "Image 6", imageUrl: "./img/trainingDay.png" },
    { title: "Image 7", imageUrl: "./img/Squidgame.png" }
];
const carousel2 = [
    { title: "Image 1", imageUrl: "./img/Zorro.png" },
    { title: "Image 2", imageUrl: "./img/breakingbad.png" },
    { title: "Image 3", imageUrl: "./img/fastNfurious.png" },
    { title: "Image 4", imageUrl: "./img/spiderman1.png" },
    { title: "Image 5", imageUrl: "./img/mercredi.png" },
    { title: "Image 6", imageUrl: "./img/trainingDay.png" },
    { title: "Image 7", imageUrl: "./img/Squidgame.png" }
];

// Sélection du conteneur où les images seront affichées
const carouselContainer = document.querySelector('.list-items');

// Fonction pour mélanger le tableau (Fisher-Yates Shuffle)
function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    };
};

// Fonction pour afficher toutes les images
function displayAllImages(images) {
    const imageList = document.createElement('div');
    imageList.classList.add('Movies');

    images.forEach(item => {
        const imageItem = document.createElement('div');
        imageItem.classList.add('image-item');

        const img = document.createElement('img');
        img.src = item.imageUrl;
        img.alt = item.title;

        const title = document.createElement('div');
        title.classList.add('image-title');
        title.textContent = item.title;

        // Ajout de l'image et du titre à l'élément imageItem
        imageItem.appendChild(img);
        imageItem.appendChild(title);
        imageList.appendChild(imageItem);
    });

    // Ajout de l'élément imageList au conteneur principal
    carouselContainer.appendChild(imageList);
}

// Appel de la fonction pour afficher les images
shuffleArray(carousel)
shuffleArray(carousel2)
displayAllImages(carousel);
displayAllImages(carousel2);

// Barre de recherche
    // Sélection des éléments
    const searchIcon = document.querySelector('.search-icon');
    const inputSearch = document.querySelector('.input-search');

    // Ajout de l'événement de clic
    searchIcon.addEventListener('click', () => {
    inputSearch.classList.toggle('expanded'); // Ajouter ou supprimer la classe "expanded"
});