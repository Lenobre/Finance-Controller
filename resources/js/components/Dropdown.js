export default class Dropdown {
    #containerElement;
    #buttonElement;
    #optionsContainerElement;
    #optionsElement;
    #optionsTemplate;

    constructor(containerElement) {
        this.#containerElement = containerElement;
        this.#buttonElement = this.#containerElement.querySelector("#toggler");
        this.#optionsContainerElement =
            this.#containerElement.querySelector("#options-container");
        this.#optionsElement =
            this.#optionsContainerElement.querySelector("#options");
        this.#optionsTemplate =
            this.#optionsContainerElement.querySelector("#option-template");

        this.#events();
    }

    loadOptions(options) {
        this.#optionsElement.innerHTML = "";

        options.forEach((option) => {
            const optionElement = this.#optionsTemplate.content.cloneNode(true);

            const input = optionElement.querySelector("input");
            if (input) input.value = option.value;
            if (option.selected) input.checked = true;

            const text = optionElement.querySelector("#text");
            if (text) text.textContent = option.text;

            this.#optionsElement.appendChild(optionElement);
        });
    }

    #openOptions = () => {
        this.#optionsContainerElement.classList.toggle("hidden");
    };

    #events() {
        this.#buttonElement.addEventListener("click", this.#openOptions);
    }
}
