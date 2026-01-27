/* ================== BOOTSTRAP ================== */
document.addEventListener("DOMContentLoaded", initApp);

/* ================== CONTROLLER ================== */
function initApp() {
    const form = document.getElementById("exerciseForm");
    const btnResolver = document.getElementById("btnResolver");
    if (!form) return; // fail fast

    const route = getRouteParams();
    if (!route) return;

    const controller = createFormController(form, route);

    form.addEventListener("input", controller.debouncedSend);
    btnResolver?.addEventListener("click", controller.send);
}

/* ================== CONTROLLER FACTORY ================== */
function createFormController(form, route) {
    let timer = null;

    async function send() {
        try {
            const data = await apiSendExercise(route, form);
            renderMessage(data);
        } catch (err) {
            console.error("Fetch error:", err);
        }
    }

    function debouncedSend() {
        clearTimeout(timer);
        timer = setTimeout(send, 4000);
    }

    return { send, debouncedSend };
}

/* ================== SERVICE: API ================== */
async function apiSendExercise({ tema, ejercicio }, form) {
    const url = `/api/tema${tema}/ejercicio${ejercicio}`;
    const response = await fetch(url, {
        method: "POST",
        body: new FormData(form)
    });

    if (!response.ok) throw new Error("HTTP Error");
    return response.json();
}

/* ================== SERVICE: ROUTER ================== */
function getRouteParams() {
    const match = window.location.pathname.match(/tema(\d+)\/ejercicio(\d+)/);
    return match ? { tema: Number(match[1]), ejercicio: Number(match[2]) } : null;
}

/* ================== UI RENDER ================== */
function renderMessage({ mensaje }) {
    const el = document.getElementById("jsResult");
    if (el) el.textContent = mensaje ?? "Sin respuesta";
}
