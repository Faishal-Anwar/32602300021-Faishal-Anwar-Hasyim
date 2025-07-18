<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <title>Layouting</title>
</head>

<body>
    <div class="navbar">
        <!-- Brand -->
        <div class="navbar-brand">
            <span class="name-small">Faishal</span>
        </div>

        <!-- Burger -->
        <button class="navbar-toggler" id="navbarToggler">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Menu -->
        <div class="navbar-menu" id="navbarMenu">
            <div class="navbar-page">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li class="dropdown">
                        <a href="#" id="toggleSosmed">Contact</a>
                        <!-- Dropdown Sosmed -->
                        <div class="navbar-sosmed" id="sosmedDropdown">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="banner">
        <span class="name">Faishal Anwar Hasyim</span>
        <br>
        <span class="description">
            Mahasiswa Fakultas Teknologi Industri, Jurusan Teknik Informatika
        </span>
    </div>
    <div>

    </div>
    <?= $this->renderSection('content'); ?>

    <script>
        const toggler = document.getElementById('navbarToggler');
        const navbarMenu = document.getElementById('navbarMenu');
        const sosmedToggle = document.getElementById('toggleSosmed');
        const sosmedDropdown = document.getElementById('sosmedDropdown');

        toggler.addEventListener('click', () => {
            navbarMenu.classList.toggle('active');
        });

        sosmedToggle.addEventListener('click', function(e) {
            e.preventDefault();
            sosmedDropdown.classList.toggle('show');
        });
    </script>


</body>

</html>