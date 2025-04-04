document.addEventListener("DOMContentLoaded", (event) => {
    console.log("DOM totalmente carregado e analisado");

    // scroll navegação
    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            document.querySelector(".header").classList.add("navscroll");
        } else {
            document.querySelector(".header").classList.remove("navscroll");
        }
    });

    // butao mobile
    const btnMobile = document.getElementById("btnmobile");
    const navMobile = document.querySelector(".nav_mobile");

    btnMobile.addEventListener("click", () => {
        navMobile.classList.toggle("active");
    });

    // serviços
    const leftArrow = document.getElementById("left-arrow");
    const rightArrow = document.getElementById("right-arrow");
    const crollContainer = document.querySelector(".cards-servicos");
    const card = document.querySelectorAll(".card");

    function handleLeftArrow() {
        if (window.scrollX <= 750) {
            crollContainer.scrollBy({ left: -320, behavior: "smooth" });
        } else {
            crollContainer.scrollBy({ left: -425, behavior: "smooth" });
        }
    }
    function handleRightArrow() {
        if (window.scrollX <= 750) {
            crollContainer.scrollBy({ left: 320, behavior: "smooth" });
        } else {
            crollContainer.scrollBy({ left: 425, behavior: "smooth" });
        }
    }

    leftArrow.addEventListener("click", handleLeftArrow);
    rightArrow.addEventListener("click", handleRightArrow);

    //fag
    const fag = document.querySelectorAll(".faq-item");

    fag.forEach((item) => {
        const question = item.querySelector(".faq-question");
        question.addEventListener("click", () => {
            item.classList.toggle("active");
        });
    });
});
//formulario
const btnEnviar = document.querySelector("button");
const inputNome = document.getElementById("nome");
const inputEmail = document.getElementById("email");
const tel = document.getElementById("tel");
const textarea = document.getElementById("message");
const messageErro = document.getElementById("msg-alert");

console.log(messageErro);

btnEnviar.addEventListener("click", (e) => {
    e.preventDefault();

    if (
        !inputNome.value ||
        !inputEmail.value ||
        !tel.value ||
        !textarea.value
    ) {
        messageErro.innerHTML = "Todos os campos são obrigatorio!";
        return;
    }
    inputNome.textContent = "";
    inputEmail.textContent = "";
    tel.textContent = "";
    textarea.textContent = "";
    messageErro.textContent = "";
    alert("Mensagem enviada com sucesso ");
});
