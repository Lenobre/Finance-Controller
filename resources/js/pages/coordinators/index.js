import { shared } from "./shared";
import Modal from "../../components/modal/Modal.js";
import Table from "../../components/table/Table.js";
import Coordinator from "../../services/Coordinator.js";
import Toast from "../../components/toast/Toast.js";

document.addEventListener("DOMContentLoaded", () => {
    const overlay = document.getElementById("overlay");

    // Filter
    const filterButton = document.getElementById("filter-button");
    const filterModal = document.getElementById("filter-modal");
    shared.FilterModal = new Modal(filterModal, overlay);

    filterButton.addEventListener("click", () => shared.FilterModal.open());

    // Create
    shared.createForm = document.getElementById("create-form");

    const createButton = document.getElementById("create-button");
    const createModal = document.getElementById("create-modal");
    shared.CreateModal = new Modal(createModal, overlay);

    createButton.addEventListener("click", () => shared.CreateModal.open());

    // Update
    shared.updateForm = document.getElementById("update-form");

    const updateModal = document.getElementById("update-modal");
    shared.UpdateModal = new Modal(updateModal, overlay);

    // Delete
    shared.deleteForm = document.getElementById("delete-form");
    const deleteModal = document.getElementById("delete-modal");
    shared.DeleteModal = new Modal(deleteModal, overlay);

    // Toast
    const toastContainer = document.getElementById("toast-container");
    shared.ToastManager = new Toast(toastContainer);

    // Table
    const table = document.getElementById("table");
    shared.Table = new Table(table, Coordinator.list);
    shared.Table.loadData();
});
