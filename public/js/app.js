
document.addEventListener("DOMContentLoaded", function () {
    let loginForm = document.getElementById("loginForm");
    if (loginForm) {
        console.log("✅ Il form è stato trovato!");
        loginForm.addEventListener("submit", login);
    } else {
        console.error("❌ Form non trovato! Verifica l'ID nel Blade.");
    }
});


/**
 * Funzione per effettuare il login
 */
async function login(event) {
    event.preventDefault(); // 🚀 Blocca il comportamento predefinito

    console.log("Login function triggered!"); // Debug per verificare se la funzione viene eseguita

    let formData = new FormData(document.getElementById("loginForm"));

    let response = await fetch("/api/login", {
        method: "POST",
        headers: {
            Accept: "application/json",
        },
        body: formData,
    });

    let data = await response.json();
    console.log("Risposta API Login:", data); // Debug

    if (response.ok) {
        localStorage.setItem("authToken", data.token);
        console.log("Token salvato:", data.token);
        window.location.href = "/breweries"; // ✅ Reindirizza alla pagina corretta
    } else {
        alert("Errore: " + data.message);
    }
}


/**
 * Funzione per recuperare la lista delle birrerie
 */
async function fetchBreweries() {
    let token = localStorage.getItem("authToken");

    if (!token) {
        alert("Non sei autenticato! Torna al login.");
        window.location.href = "/";
        return;
    }

    let response = await fetch("/api/breweries", {
        headers: { Authorization: "Bearer " + token },
    });

    let data = await response.json();
    if (response.ok) {
        document.getElementById("brewery-list").innerHTML = data
            .map((b) => `<li>${b.name}</li>`)
            .join("");
    } else {
        alert("Errore: " + data.message);
    }
}

// Logout
function logout() {
    localStorage.removeItem("authToken");
    window.location.href = "/";
}
