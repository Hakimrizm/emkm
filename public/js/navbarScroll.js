window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");

    if (window.scrollY > 0) {
        navbar.classList.remove("navbar-dark");
        navbar.classList.add("bg-secondary-subtle");
        navbar.classList.add("shadow-sm");
    } else {
        navbar.classList.add("navbar-dark");
        navbar.classList.remove("bg-secondary-subtle");
        navbar.classList.remove("shadow-sm");
    }
});
