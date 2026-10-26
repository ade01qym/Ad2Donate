function loadUser() {
    fetch("getUser.php")
    .then(res => res.json())
    .then(data => {
        document.getElementById("credits").innerText = data.credits;

        let donation = parseFloat(data.donation) || 0;
        document.getElementById("donation").innerText = donation.toFixed(2);
    });
}

loadUser();

document.getElementById("watchAd").addEventListener("click", () => {
    fetch("updateCredits.php")
    .then(() => loadUser());
});