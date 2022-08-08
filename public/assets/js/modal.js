let profile_state = false;

function viewConditions() {
    modal = document.getElementById("modal-app");
    modal.setAttribute("style", "display:flex;");
    modalContent = document.getElementById("content-modal-app");
    modalContent.innerHTML = "<h2>Terminos y condiciones</h2>"
    + "<p>Muchos terminos </p>"
    + '<button class="button-login" onclick="closeModal()">Cerrar</button>';
}

function closeModal() {
    modal = document.getElementById("modal-app");
    modal.setAttribute("style", "display:none;");
    modalContent = document.getElementById("content-modal-app");
    modalContent.innerHTML = "";
}

function viewProfile() {
    profile = document.getElementById("profile-box");
    if (profile_state) {
        profile.setAttribute("style", "display:none;");
    } else {
        profile.setAttribute("style", "display:block;");
    }
    profile_state = !profile_state;
}