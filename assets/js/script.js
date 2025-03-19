document.addEventListener('DOMContentLoaded', () => {

    var menu = document.getElementById('menu');

    function showMenu() {
        menu.style.display = "flex";
    }

    function hideMenu() {
        menu.style.display = "none";
      }

    document.getElementById("open-menu").addEventListener ("click", showMenu);
    document.getElementById("close-menu").addEventListener ("click", hideMenu);

});