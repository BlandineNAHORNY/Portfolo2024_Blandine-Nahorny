document.addEventListener("DOMContentLoaded", function () {
    const cursor = document.querySelector('.custom-cursor');
    const cursorTrail = document.querySelector('.custom-cursor-trail');

    document.addEventListener('mousemove', (e) => {
        // Met à jour la position du curseur principal
        cursor.style.transform = `translate(${e.clientX}px, ${e.clientY}px)`;

        // Applique un effet "de traînée" au curseur secondaire
        cursorTrail.style.transform = `translate(${e.clientX}px, ${e.clientY}px)`;
    });
});
