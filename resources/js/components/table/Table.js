export default class Table {
    #tableElement;
    #headerElement;
    #bodyElement;
    #rowTemplate;
    #notFoundTemplate;
    #serviceHandler;
    #loadingSkeleton;

    #whenInsertedCallback;

    set whenInserted(callback) {
        this.#whenInsertedCallback = callback;
    }

    constructor(tableElement, serviceHandler) {
        this.#tableElement = tableElement;

        this.#headerElement = this.#tableElement.querySelector("#header");
        this.#bodyElement = this.#tableElement.querySelector("#body");
        this.#notFoundTemplate = this.#tableElement
            .querySelector("#empty-template")
            .content.cloneNode(true);
        this.#rowTemplate = this.#tableElement.querySelector("#row-template");

        this.#serviceHandler = serviceHandler;

        this.#loadingSkeleton = this.#getSkeletonTemplate();
    }

    #getColumnsQuantity() {
        const tr = this.#headerElement.querySelectorAll("th");
        ("");
        return tr.length;
    }

    #getSkeletonTemplate() {
        const tr = document.createElement("tr");

        for (let i = 0; i < this.#getColumnsQuantity(); i++) {
            const td = document.createElement("td");
            td.classList.add("p-2");

            const skeleton = document.createElement("div");
            skeleton.classList.add(
                "bg-gray-200",
                "w-full",
                "h-6",
                "rounded-md",
                "animate-pulse"
            );

            td.appendChild(skeleton);
            tr.appendChild(td);
        }

        return tr;
    }

    loadSkeleton() {
        this.#bodyElement.appendChild(this.#loadingSkeleton);
    }

    removeSkeleton() {
        this.#bodyElement.removeChild(this.#loadingSkeleton);
    }

    notFound() {
        this.#bodyElement.appendChild(this.#notFoundTemplate);
    }

    removeNotFound() {
        this.#bodyElement.removeChild(this.#notFoundTemplate);
    }

    #fillRow(row, item) {
        const tds = row.querySelectorAll("td");

        tds.forEach((td) => {
            const field = td.dataset.field;

            if (field === undefined) return;

            td.textContent = this.#resolveField(item, field) ?? "";
        });

        return row;
    }

    #resolveField(obj, field) {
        const paths = field.split(".");
        let current = obj;

        paths.forEach((path) => {
            obj = obj[path];

            if (obj === undefined) return;

            current = obj;
        });

        return current;
    }

    async loadData(data = new FormData()) {
        try {
            this.#bodyElement.innerHTML = "";
            this.loadSkeleton();

            const result = await this.#serviceHandler(data);

            if (!result.response.ok)
                throw new Error(result.response.statusText);

            if (result.data.data.length === 0) {
                this.removeSkeleton();
                this.notFound();
                return;
            }

            this.removeSkeleton();
            result.data.data.forEach((item) => {
                const row = this.#fillRow(
                    this.#rowTemplate.content.cloneNode(true),
                    item
                );

                if (typeof this.#whenInsertedCallback === "function")
                    this.#whenInsertedCallback(row, item);

                this.#bodyElement.appendChild(row);
            });
        } catch (error) {
            this.#bodyElement.innerHTML = "";
            this.#bodyElement.appendChild(this.#notFoundTemplate);

            console.error(`Table(loadData): ${error}`);
        }
    }
}
