const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId);

    toggle.addEventListener("click", () => {
        // Add show-menu class to nav menu
        nav.classList.toggle("show-menu");

        // Add show-icon to show and hide the menu icon
        toggle.classList.toggle("show-icon");
    });
};

showMenu("nav-toggle", "nav-menu");

document.addEventListener("DOMContentLoaded", function() {
    const navbarToggler = document.querySelector(".navbar-toggler");
    const card = document.querySelector(".card");

    navbarToggler.addEventListener("click", function() {
        // Toggle the class to move the jumbotron down
        card.classList.toggle("shrink");
    });
});