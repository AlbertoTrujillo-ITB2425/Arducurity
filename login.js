$(document).ready(function(){
    $('#loginForm').submit(function(event){
        event.preventDefault(); // Evitar el envío del formulario por defecto

        // Enviar solicitud AJAX
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response){
                if(response.success){
                    $('#loggedInUser').val(response.username); // Establecer el valor del usuario logueado
                    closeLoginModal(); // Cerrar el modal de inicio de sesión
                    updateUI(); // Actualizar la interfaz de usuario para mostrar el nombre de usuario
                } else {
                    alert(response.error); // Mostrar mensaje de error si el inicio de sesión falla
                }
            },
            error: function(){
                alert('Error de conexión'); // Mostrar mensaje de error en caso de error de conexión
            }
        });
    });
});

/* Función para actualizar la interfaz de usuario después del inicio de sesión */
function updateUI() {
    var loggedInUsername = $('#loggedInUser').val();
    $('.auth-buttons').html('<p>Welcome, ' + loggedInUsername + '</p>'); // Mostrar el nombre de usuario
}
