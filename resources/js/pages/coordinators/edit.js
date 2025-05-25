import Form from "../../components/form/Form.js";
import Coordinator from "../../services/Coordinator.js";
import { shared } from "./shared.js";

function afterSubmit({ response, data }) {
    if (response.ok) {
        shared.ToastManager.success(
            "Ação realizada com sucesso!",
            data.message
        );

        shared.updateForm.reset();
        shared.Table.loadData();
        shared.UpdateModal.close();
        return;
    }

    shared.ToastManager.error("Ação não efetuada com sucesso", data.message);
}

document.addEventListener("DOMContentLoaded", () => {
    new Form(shared.updateForm, Coordinator.update, {
        submitLoading: true,
        afterSubmit: afterSubmit,
    });
});
