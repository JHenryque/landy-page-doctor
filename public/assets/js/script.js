document.addEventListener("DOMContentLoaded", (event) => {
    console.log("DOM totalmente carregado e analisado");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            document.querySelector(".header").classList.add("navscroll");
        } else {
            document.querySelector(".header").classList.remove("navscroll");
        }
    });
});
