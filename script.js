function openBookingForm() {
    document.getElementById("booking-form").classList.remove("hidden");
}

function closeBookingForm() {
    document.getElementById("booking-form").classList.add("hidden");
}

// Lägga till onclick-attributet på knapparna
document.querySelectorAll('.book-button').forEach(button => {
    button.onclick = openBookingForm;
});
