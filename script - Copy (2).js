let coins = 0;

function earnCoins(amount) {
    coins += amount;
    updateCoinsDisplay();
}

function updateCoinsDisplay() {
    // Update the HTML element displaying coins
    document.getElementById('coins').textContent = coins;
}
