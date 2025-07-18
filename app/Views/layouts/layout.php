<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faishal Anwar Hasyim - Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body { font-family: 'Segoe UI', sans-serif; }
        header, footer { background-color: #222; color: white; padding: 1rem; }
        nav a { color: white; margin-right: 15px; }
        nav a:hover { text-decoration: underline; }
        main { padding: 2rem; }
    </style>
</head>
<body>
    <nav class="bg-dark p-2">
            <div class="navbar-page">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    <header>
        <h1>Faishal Anwar Hasyim</h1>
        <p>Mahasiswa Teknik Informatika, Fakultas Teknologi Industri</p>
    </header>

    

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="text-center">
        <p>&copy; <?= date('Y') ?> Faishal Anwar Hasyim. All rights reserved.</p>
    </footer>

</body>
</html>