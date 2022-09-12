let profile_state = false;

function donate() {
    modal = document.getElementById("modal-app");
    modal.setAttribute("style", "display:flex; background-color: #4f425e;");
    modalContent = document.getElementById("content-modal-app");
    modalContent.setAttribute("style", "background-color: rgb(213, 195, 230);");
    modalContent.innerHTML = '<div style="width:100%;display: flex; justify-content: flex-end;"><button class= "closeModal" onclick="closeModal()">x</button></div>' + "<h2>¿Cuanto desea donar?</h2>"
    + "<input type='number' min='1' pattern='^[0-9]+'>"
    + '<button class="button-login buttom-donate" onclick="thanksDonate()">Donar</button>';
}

function thanksDonate() {
    modal = document.getElementById("modal-app");
    modal.setAttribute("style", "display:flex; background-color: #4f425e;");
    modalContent = document.getElementById("content-modal-app");
    modalContent.setAttribute("style", "background-color: rgb(213, 195, 230);");
    modalContent.innerHTML = '<div style="width:100%;display: flex; justify-content: flex-end;"><button class= "closeModal" onclick="closeModal()">x</button></div>' + "<h2>¡Gracias por donar!</h2>"
}

function confirmSale(product, buyer_id) {
    console.log('aca');
    const homeOrder= document.getElementById('homeOrder').value 
    const tokenOrder= document.getElementById('tokenOrder').value 
    const quantity= document.getElementById(`quantity-${product.id}`).value 
    modal = document.getElementById("modal-app");
    modal.setAttribute("style", "display:flex;");
    modalContent = document.getElementById("content-modal-app");
    const htmlValue = '<button class= "closeModal" onclick="closeModal()">x</button>' + "<h2>FACTURA</h2>" +
    quantity + "  --->  " + product.title + "<br>TOTAL: $" + quantity*product.price
    + '<form method="POST" action="'+homeOrder+'"><input name="_token" value="' + tokenOrder + '" type="hidden" />' +
    '<input type="text" name="seller_id" value="' +
    product.user_id +'" hidden /><input type="text" name="buyer_id" value="' +
    buyer_id + '" hidden /><input type="text" name="post_id" value="'+ 
    product.id + '" hidden /><input type="text" name="price" value="' +
    quantity*product.price + '" hidden /><input type="text" name="quantity" value="' + 
    quantity + '" hidden /><input type="text" name="status" value="pending" hidden /><input class="button-login" type="submit" value="Confirmar" /></form>';
    console.log(htmlValue);
    modalContent.innerHTML = htmlValue;
}

function closeModal() {
    modal = document.getElementById("modal-app");
    modal.setAttribute("style", "display:none;");
    modalContent = document.getElementById("content-modal-app");
    modalContent.innerHTML = "";
}

function redirection() {
    window.location.replace("http://127.0.0.1:8000/profile");
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