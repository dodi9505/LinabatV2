document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("contactForm");
    const toast = document.getElementById("toast");
    const button = form.querySelector(".btn-submit");
    const text = button.querySelector(".btn-text");
    const loader = button.querySelector(".btn-loader");

    let sending = false;

    function showToast(message, type = "success") {
        toast.textContent = message;
        toast.className = `toast show ${type}`;

        setTimeout(() => {
            toast.classList.remove("show");
        }, 4000);
    }
    function toggleLoading(state) {
        if (state) {
            sending = true;

            button.disabled = true;
            loader.classList.remove("hidden");
            text.textContent = "Enviando...";

            // bloquear inputs
            form.querySelectorAll("input, textarea, select").forEach(el => {
                el.disabled = true;
            });

        } else {
            sending = false;

            button.disabled = false;
            loader.classList.add("hidden");
            text.textContent = "Enviar mensaje →";

            // desbloquear inputs
            form.querySelectorAll("input, textarea, select").forEach(el => {
                el.disabled = false;
            });
        }
    }

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        if (sending) return; // evita doble envío

        const data = new FormData(form);
        
        toggleLoading(true);

        try {
            const res = await fetch("src/send_mail.php", {
                method: "POST",
                body: data
            });

            const json = await res.json();

            showToast(json.msg, json.ok ? "success" : "error");

            if (json.ok) form.reset();

        } catch (err) {
            showToast("Error al enviar formulario", "error");
        }

        toggleLoading(false);
    });

});