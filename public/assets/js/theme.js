var theme = document.getElementById('theme');

window.onload = setTheme();

theme.onclick = function () {
    toggleTheme();
    setTheme();
}

function setTheme() {
    document.documentElement.dataset.bsTheme = localStorage.getItem('color-theme');
}

function toggleTheme() {
    if (localStorage.getItem('color-theme') == 'light') {
        localStorage.setItem('color-theme', 'dark');
    } else {
        localStorage.setItem('color-theme', 'light');
    }
}
