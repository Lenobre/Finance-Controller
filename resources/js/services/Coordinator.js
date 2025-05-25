import requestHandler from "../components/requestHandler.js";

export default class Coordinator {
    static endpoint = "/api/coordinator";

    static async create(data) {
        const response = await requestHandler(`${Coordinator.endpoint}`, {
            method: "POST",
            body: data,
        });

        return response;
    }

    static async update(data) {
        const id = data.get("uuid");

        const response = await requestHandler(`${Coordinator.endpoint}/${id}`, {
            method: "POST",
            body: data,
        });

        return response;
    }

    static async delete(data = new FormData()) {
        const id = data.get("uuid");

        const response = await requestHandler(`${Coordinator.endpoint}/${id}`, {
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": data.get("_token"),
            },
        });

        return response;
    }

    static async list(params = new FormData()) {
        const query = new URLSearchParams(params).toString();

        const response = await requestHandler(
            `${Coordinator.endpoint}?${query}`,
            {
                method: "GET",
            }
        );

        return response;
    }
}
