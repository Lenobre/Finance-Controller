import Form from "../../components/form/Form.js";
import Toast from "../../components/toast/Toast.js";
import Auth from "../../services/Auth.js";

let ToastManager = null;
function afterSubmit({ response, data }) {
    if (!response.ok) {
        ToastManager.error("Ação não efetuada com sucesso!", data.message);
        return;
    }

    ToastManager.success(
        "Ação efetuada com sucesso!",
        "Login realizado com sucesso! Redirecionando para dashboard"
    );

    setTimeout(() => (window.location.href = data.redirect), 1000);
}

document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login-form");

    const toastContainer = document.getElementById("toast-container");
    ToastManager = new Toast(toastContainer);

    new Form(loginForm, Auth.login, {
        submitLoading: true,
        afterSubmit: afterSubmit,
    });
});
