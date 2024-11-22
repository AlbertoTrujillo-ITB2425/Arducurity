document.addEventListener("DOMContentLoaded", () => {
  const reviewForm = document.getElementById("review-form");
  const reviewList = document.getElementById("review-list");

  // Obtener reseñas al cargar la página
  fetch("get_reviews.php")
    .then((res) => res.json())
    .then((reviews) => {
      reviews.forEach((review) => {
        const reviewCard = createReviewCard(review);
        reviewList.appendChild(reviewCard);
      });
    });

  reviewForm.addEventListener("submit", function (e) {
    e.preventDefault(); // Prevenir el comportamiento por defecto

    const username = document.getElementById("username").value;
    const rating = document.getElementById("rating").value;
    const comment = document.getElementById("comment").value;

    const review = {
      username,
      rating,
      comment,
    };

    // Enviar la reseña al backend
    fetch("submit_review.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(review),
    })
      .then((res) => {
        if (res.ok) {
          const reviewCard = createReviewCard(review);
          reviewList.appendChild(reviewCard); // Agregar la nueva reseña al final
          reviewForm.reset(); // Limpiar el formulario
        } else {
          alert("Error submitting review.");
        }
      })
      .catch((err) => {
        console.error("Error:", err);
      });
  });

  // Función para crear tarjetas de reseñas
  function createReviewCard(review) {
    const reviewCard = document.createElement("div");
    reviewCard.className = "review-card";

    reviewCard.innerHTML = `
      <div class="header">
        <span class="username">${review.username}</span> 
        <span class="rating">${"★".repeat(review.rating)}</span>
      </div>
      <div class="comment">${review.comment}</div>
      <div class="date">${new Date(review.date || Date.now()).toLocaleDateString()}</div>
    `;

    return reviewCard;
  }
});
