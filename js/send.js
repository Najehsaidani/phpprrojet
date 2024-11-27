function send() {
    // Prevent the default form submission
    event.preventDefault();

    // Display an alert to confirm the form submission
    alert("Your message has been sent successfully!");

    // Reset the form fields
    const form = document.getElementById("contactForm");
    form.reset();
}