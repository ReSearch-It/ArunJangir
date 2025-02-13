function sendEmail() {
    // Get user inputs
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;

    // Encode URI to avoid special character issues
    let subject = encodeURIComponent("New Inquiry from " + name);
    let body = encodeURIComponent("Name: " + name + "\nEmail: " + email + "\n\nMessage:\n" + message);

    // Open the user's email client with a pre-filled email
    window.location.href = `mailto:theresearchit@gmail.com?subject=${subject}&body=${body}`;
}
