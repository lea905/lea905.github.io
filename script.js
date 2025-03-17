window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    if (loader) {
        loader.style.opacity = "0"; // Disparition progressive
        setTimeout(() => {
            loader.style.display = "none"; // Cache complètement le loader
        }, 500); // Délai pour l'effet de transition
    }
});
