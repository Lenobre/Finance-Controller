import Coordinator from "../../services/Coordinator.js";
import { shared } from "./shared.js";

document.addEventListener("DOMContentLoaded", () => {
    const filterForm = document.querySelector("#filter-form");

    filterForm.addEventListener("submit", (event) => {
        event.preventDefault();

        shared.Table.loadData(new FormData(filterForm));
    });

    const searchForm = document.querySelector("#search-form");
    searchForm.addEventListener("submit", (event) => {
        event.preventDefault();

        shared.Table.loadData(new FormData(searchForm));
    });
});
