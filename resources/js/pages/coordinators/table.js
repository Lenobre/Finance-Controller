import { shared } from "./shared.js";

function editButton(data) {
    shared.updateForm.querySelector("#uuid").value = data.uuid;
    shared.updateForm.querySelector("#status").value = data.status;
    shared.updateForm.querySelector("#name").value = data.name;
    shared.updateForm.querySelector("#email").value = data.email;
    shared.updateForm.querySelector("#telephone").value = data.telephone;

    shared.UpdateModal.open();
}

function deleteButton(data) {
    shared.deleteForm.querySelector("#uuid").value = data.uuid;

    shared.DeleteModal.open();
}

function setStatusElement(row, status) {
    let template = document.getElementById(CSS.escape(`status-${status}`));

    if (!template) return;

    template = template.content.cloneNode(true);

    const statusElement = row.querySelector("#status");
    if (!statusElement) return;

    statusElement.appendChild(template);
}

document.addEventListener("DOMContentLoaded", () => {
    shared.Table.whenInserted = (row, item) => {
        const editButtonElement = row.querySelector("#edit-button");
        editButtonElement.addEventListener("click", () => editButton(item));

        const deleteButtonElement = row.querySelector("#delete-button");
        deleteButtonElement.addEventListener("click", () => deleteButton(item));

        setStatusElement(row, item.status);
    };
});
