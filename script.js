const saludos = [
    "Hola 👋",
    "Buenos días ☀️",
    "Buenas tardes 🌇",
    "Buenas noches 🌙",
    "¡Qué tal! 😄",
    "Bienvenido 🚀"
];

function nuevoSaludo() {
    const random = Math.floor(Math.random() * saludos.length);
    document.getElementById("saludo").innerText = saludos[random];
}