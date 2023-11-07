document.addEventListener('DOMContentLoaded', () => {
  const swiper = new Swiper(".Qcm", {
    cssMode: true,
    navigation: {
      nextEl: ".fa-sharp",
      prevEl: ".swiper-button-prev",
    },
    simulateTouch: false, // disable simulation of touch events
  });
  
  // Obtenir toutes les questions et les minuteurs
  const questions = document.querySelectorAll('.container');
  const timers = document.querySelectorAll('.timer');
  let currentQuestionIndex = 0; // Index de la question en cours

  // Initialiser un tableau d'intervalle de temps pour chaque minuteur
  const timerIntervals = new Array(timers.length);

  // Ajouter un gestionnaire d'événement pour le clic sur le bouton "Valider"
  const validateButtons = document.querySelectorAll('.fa-sharp');
  validateButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
      swiper.slideNext();
      clearInterval(timerIntervals[currentQuestionIndex]); // Arrêter le minuteur après avoir cliqué sur le bouton "Valider"
      currentQuestionIndex++; // Passer à la question suivante
      disablePrevButton(currentQuestionIndex); // Désactiver le bouton "Précédent" si on est sur la première question
      initializeTimer(currentQuestionIndex); // Initialiser le minuteur pour la question suivante
    });
  });
  

  // Initialiser les minuteurs pour la première question
  initializeTimer(currentQuestionIndex);

  // Fonction pour désactiver le bouton "Précédent" si on est sur la première question
  function disablePrevButton(index) {
    const prevButton = document.querySelector('.swiper-button-prev');
    if (index === 0) {
      prevButton.classList.add('disabled');
      prevButton.disabled = true;
    } else {
      prevButton.classList.remove('disabled');
      prevButton.disabled = false;
    }
  }

  // Fonction pour initialiser le minuteur pour une question donnée
  function initializeTimer(index) {
    let timeLeft = 60;
    
    timerIntervals[index] = setInterval(() => {
      timeLeft--;
      if (timeLeft >= 0) {
        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        timers[index].textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
      } else {
        clearInterval(timerIntervals[index]);
        swiper.slideNext();
        currentQuestionIndex++; // Passer à la question suivante
        disablePrevButton(currentQuestionIndex); // Désactiver le bouton "Précédent" si on est sur la première question
        initializeTimer(currentQuestionIndex); // Initialiser le minuteur pour la question suivante
      }
    }, 1000);
  }
});
const swiper = new Swiper('.Qcm', {
  direction: 'horizontal',
  loop: false,
  slidesPerView: 1,
  spaceBetween: 0,
  centeredSlides: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  simulateTouch: !(('ontouchstart' in window) || (navigator.maxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0))
});

if (!swiper.simulateTouch) {
  document.addEventListener('mousemove', (event) => {
    if (event.ctrlKey || event.metaKey || event.altKey) {
      swiper.allowSlidePrev = false;
      swiper.allowSlideNext = false;
      swiper.allowTouchMove = false;
    }
  });
}
