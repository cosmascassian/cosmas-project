// ORDER ALERT + VALIDATION
document.addEventListener("DOMContentLoaded", function () {

    let forms = document.querySelectorAll("form");

    forms.forEach(form => {
        form.addEventListener("submit", function (e) {

            let qty = form.querySelector("input[name='qty']").value;

            if (qty <= 0) {
                e.preventDefault();
                alert("Please enter valid quantity!");
                return;
            }

            alert("Sending order to kitchen 🍛");
        });
    });

});