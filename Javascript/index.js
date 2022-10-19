document.addEventListener('DOMContentLoaded', () => {
    const addCartModalButtons = document.getElementsByClassName("addCartModal");
    const modalForm = document.getElementById("modalLoginForm");
    const removeBtn = document.querySelectorAll(".removeBtn");

    for (const button of addCartModalButtons) {
        button.addEventListener("click", () => {
            const inputProductId = modalForm.querySelector('[name="product_id"]');
            const inputQuantity = modalForm.querySelector('[name="quantity"]');

            inputProductId.value = button.dataset.product_id;
            inputQuantity.setAttribute("max", button.dataset.stock);
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
});