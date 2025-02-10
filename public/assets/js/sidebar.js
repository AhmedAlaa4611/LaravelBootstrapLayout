var sidebar = document.getElementById('sidebar');
var aside = document.querySelector('aside');

sidebar.onclick = function () {
    aside.classList.toggle('hide');
}
