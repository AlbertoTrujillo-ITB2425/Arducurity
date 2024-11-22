document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#reservation-form'); // Asegurarse de que el ID coincide con el del formulario en el HTML
    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevenir la acción predeterminada

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const product = document.getElementById('product').value;
        const paymentMethod = document.getElementById('payment-method').value;

        if (!name || !email) {
            alert("Please fill out all required fields.");
            return;
        }

        const data = {
            name: name,
            email: email,
            product: product,
            paymentMethod: paymentMethod,
            cardNumber: '',
            expirationDate: '',
            cvv: '',
            paypalEmail: ''
        };

        if (paymentMethod === 'credit-card') {
            data.cardNumber = document.getElementById('card-number').value.trim();
            data.expirationDate = document.getElementById('expiration-date').value;
            data.cvv = document.getElementById('cvv').value.trim();
        } else if (paymentMethod === 'paypal') {
            data.paypalEmail = document.getElementById('paypal-email').value.trim();
        }

        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'reserve.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) { 
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        alert("Reservation successful!");
                    } else {
                        alert("Error: " + response.error);
                    }
                } else {
                    alert("An error occurred. Please try again.");
                }
            }
        };

        xhr.send(JSON.stringify(data));
    });

    // Mostrar detalles del método de pago según la selección
    document.getElementById('payment-method').addEventListener('change', function () {
        var method = this.value;
        document.getElementById('credit-card-details').style.display = (method === 'credit-card') ? 'block' : 'none';
        document.getElementById('paypal-details').style.display = (method === 'paypal') ? 'block' : 'none';
    });
});

