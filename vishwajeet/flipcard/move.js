let flippedCards = [];

function flipCard(card) {
    if (card.classList.contains('clicked') || flippedCards.length === 2) {
        return;
    }

    card.classList.add('clicked');
    flippedCards.push(card);

    if (flippedCards.length === 2) {
        checkMatch();
    }
}

function checkMatch() {
    let image1 = flippedCards[0].querySelector('.flip-card-back img').src;
    let image2 = flippedCards[1].querySelector('.flip-card-back img').src;

    if (image1 === image2) {
        alert('Card was Matched!');
        flippedCards = [];

        if (document.querySelectorAll('.flip-card.clicked').length === document.querySelectorAll('.flip-card').length) {
            resetCards();
        }
    } else {
        setTimeout(function() {
            flippedCards.forEach(function(card) {
                card.classList.remove('clicked');
            });
            flippedCards = [];
        }, 800);
    }
}

function resetCards() {
    document.querySelectorAll('.flip-card.clicked').forEach(function(card) {
        card.classList.remove('clicked');
    });
    alert('Reset Successful');
    flippedCards = [];
}
