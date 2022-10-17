document.addEventListener('DOMContentLoaded', () => {
    const addCartModalButtons = document.getElementsByClassName("addCartModal");
    const modalForm = document.getElementById("modalLoginForm");

    for (const button of addCartModalButtons) {
        button.addEventListener("click", () => {
            const inputProductId = modalForm.querySelector('[name="product_id"]');
            const inputQuantity = modalForm.querySelector('[name="quantity"]');

            inputProductId.value = button.dataset.product_id;
            inputQuantity.setAttribute("max", button.dataset.stock);
        });
    }
});