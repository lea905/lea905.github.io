window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    if (loader) {
        loader.style.opacity = "0"; // Disparition progressive
        setTimeout(() => {
            loader.style.display = "none"; // Cache complètement le loader
        }, 500); // Délai pour l'effet de transition
    }
});

function toggleMenu() {
    document.getElementById("menu").classList.toggle("active");
}

document.addEventListener("DOMContentLoaded", function() {
    // Récupérer tous les boutons d'accordéon
    const accordions = document.querySelectorAll(".accordion");

    // Ajouter un événement de clic à chaque bouton
    accordions.forEach(acc => {
        acc.addEventListener("click", function() {
            // Toggle de la classe "active" pour changer l'apparence du bouton
            this.classList.toggle("active");

            // Récupérer le panneau suivant et afficher/masquer
            const panel = this.nextElementSibling;
            panel.classList.toggle("show");
        });
    });
});
