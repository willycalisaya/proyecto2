let flippedCards = [];
let cards = document.querySelectorAll('.card');

function flipCard(card) {
  if (flippedCards.length < 2 && !flippedCards.includes(card)) {
    card.classList.add('flipped');
    flippedCards.push(card);

    if (flippedCards.length === 2) {
      setTimeout(checkMatch, 1000);
    }
  }
}

function checkMatch() {
  let [card1, card2] = flippedCards;

  if (card1.innerHTML === card2.innerHTML) {
    card1.removeEventListener('click', () => flipCard(card1));
    card2.removeEventListener('click', () => flipCard(card2));
  } else {
    card1.classList.remove('flipped');
    card2.classList.remove('flipped');
  }

  flippedCards = [];
}