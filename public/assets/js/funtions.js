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

function showOptionSelected(option) {
    let optionReview = document.getElementById('review');
    let optionProduct = document.getElementById('product');
    let optionHistory = document.getElementById('history');
    let optionReviewContent = document.getElementById('review-content');
    let optionProductContent = document.getElementById('product-content');
    let optionHistoryContent = document.getElementById('history-content');
    optionReview.className = "button-profile";
    optionProduct.className = "button-profile";
    optionHistory.className = "button-profile";
    optionReviewContent.style.display = 'none';
    optionProductContent.style.display = 'none';
    optionHistoryContent.style.display = 'none';
    if (option === 'review') {
        optionReview.className = "button-profile selected";
        optionReviewContent.style.display = 'block';
    }
    if (option === 'product') {
        optionProduct.className = "button-profile selected";
        optionProductContent.style.display = 'block';
    }
    if (option === 'history') {
        optionHistory.className = "button-profile selected";
        optionHistoryContent.style.display = 'block';
    }
}