document.addEventListener("DOMContentLoaded", function() {
    // Cacher le formulaire d'inscription par défaut
    let signupForm = document.getElementById("Signup");
    signupForm.style.display = "block";

    // Lorsque l'utilisateur clique sur "Signup" dans le formulaire de connexion, afficher le formulaire d'inscription
    let signupLink = document.getElementById("signupLink");
    signupLink.addEventListener("click", function(event) {
        event.preventDefault();
        signupForm.style.display = "block";
        document.getElementById("login").style.display = "none";
    });

    // Lorsque l'utilisateur clique sur "Login" dans le formulaire d'inscription, afficher le formulaire de connexion
    let loginLink = document.getElementById("loginLink");
    loginLink.addEventListener("click", function(event) {
        event.preventDefault();
        signupForm.style.display = "none";
        document.getElementById("login").style.display = "block";
    });
});
