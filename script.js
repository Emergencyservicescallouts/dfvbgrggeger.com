let unlockedUnits = {
    medicUnit: false,
    aerialUnit: false
};

function unlockSpecialUnit(unitType) {
    unlockedUnits[unitType] = true;
    // Update UI to reflect unlocked status
}
