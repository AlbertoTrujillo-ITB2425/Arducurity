document.addEventListener('DOMContentLoaded', function() {
    console.log("JavaScript is running");
    // Aquí puede ir tu código JavaScript adicional
document.addEventListener('DOMContentLoaded', function() {
    // Ejemplo de una transición sencilla para las secciones del equipo
    const teamMembers = document.querySelectorAll('.team-member img');

    teamMembers.forEach(img => {
        img.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)'; // Amplía la imagen al pasar el ratón
            this.style.transition = 'transform 0.3s'; // Añade una transición suave
        });

        img.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)'; // Restablece el tamaño original al salir
            this.style.transition = 'transform 0.3s'; // Transición suave al restablecer
        });
    });

    // Ejemplo de función para cargar datos adicionales
    const loadMoreBtn = document.querySelector('#load-more'); // Botón para cargar más
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            // Aquí puedes agregar la lógica para cargar más datos
            console.log("Cargando más datos...");
        });
    }
});
