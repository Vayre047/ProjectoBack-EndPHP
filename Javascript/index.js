document.addEventListener('DOMContentLoaded', () => {
    const addCartModalButtons = document.getElementsByClassName("addCartModal");
    const updateUser = document.getElementsByClassName("updateUser");
    const modalForm = document.getElementById("modalLoginForm");
    const removeBtn = document.querySelectorAll(".removeBtn");
    const formUpdateUser = document.getElementById("formUpdateUser");

    for (const button of addCartModalButtons) {
        button.addEventListener("click", () => {
            const inputProductId = modalForm.querySelector('[name="product_id"]');
            const inputQuantity = modalForm.querySelector('[name="quantity"]');

            inputProductId.value = button.dataset.product_id;
            inputQuantity.setAttribute("max", button.dataset.stock);
        });
    }

    for(const button of updateUser) {
        button.addEventListener("click", () => {
            const inputUserId = formUpdateUser.querySelector('[name="user_id"]');

            inputUserId.value = button.dataset.user_id;
        });
    }

    removeBtn.forEach(button => {
        const deletedButton = button.parentNode.parentNode;
        const productItem = deletedButton.dataset.product_id;
        
        button.addEventListener("click", () => {

            fetch("/removeitem/" + productItem, {
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            })
                .then(response => response.json())
                .then(result => {
                    deletedButton.remove();
                })
                .catch(err => alert("Ocorreu um erro, tente novamente"));
        });
    });

    removeBtn.forEach(btn => {
        btn.addEventListener("click", () => {
            unset($_SESSION["cart"][$_POST['[name="product_id"]']]);
        });
    });
});