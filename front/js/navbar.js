const element = document.querySelector("#nav-app");

const url = window.location.pathname;
let navbarStructure = `<nav><ul>`;

if (url.includes("app")) {
    navbarStructure += `
            <li><a href="../index.php">Início</a></li>
            <li><a href="./jogos.php">Jogos</a></li>
            <li><a href="../forms/anuncio.php">Anunciar</a></li>
            <li><a href="./profile.php">Profile</a></li>
            <li><a href="./forms/login.php">Login</a></li>
            `;
} else if (url.includes("forms")) {
    navbarStructure += `
            <li><a href="../index.php">Início</a></li>
            <li><a href="../app/jogos.php">Jogos</a></li>
            <li><a href="./anuncio.php">Anunciar</a></li>
            <li><a href="../app/profile.php">Profile</a></li>
            <li><a href="./login.php">Login</a></li>
            `;
} else {
    navbarStructure += `
            <li><a href="./index.php">Início</a></li>
            <li><a href="./app/jogos.php">Jogos</a></li>
            <li><a href="./forms/anuncio.php">Anunciar</a></li>
            <li><a href="./app/profile.php">Profile</a></li>
            <li><a href="./forms/login.php">Login</a></li>
        `;
}

navbarStructure += `</ul></nav>`;
element.innerHTML = navbarStructure;