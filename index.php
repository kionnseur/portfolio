<!doctype html>
<html>
    <html data-bs-theme="dark">
        <title>PortFolio Candaes Yan</title>
    </head>
    <body class="font-monospace ">
        <nav class="navbar fixed-top navbar-expand-lg  " id="nav">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#accueil">Acceuil</a>
                        <a class="nav-link " href="#apropos">Apropos</a>
                        <a class="nav-link" href="#parcours">Parcours</a>
                        <a class="nav-link" href="#projets">Projets</a>
                        <a class="nav-link" href="#experience">Experience</a>
                        <a class="nav-link" href="#Media">Media</a>

                    </div>
                </div>
                <i class="bx bx-sun" title="theme-button" id="btnSwitch"></i>
            </div>
        </nav>
        <?php
        $file = './pfSource/templapte/';
        include $file . 'Acceuil.php';
        include $file . 'Apropos.php';
        include $file . 'Parcours.php';
        include $file . 'Projets.php';
        include $file . 'Experience.php';
        include $file . 'Media.php';
        ?>
    </body>
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity = "sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin = "anonymous"></script><!-- comment -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="pfSource/css/index.css"/>
    <link rel="stylesheet" href="pfSource/css/acceuil.css"/>
    <link rel="stylesheet" href="pfSource/css/projets.css"/>

    <script>
        document.getElementById('btnSwitch').addEventListener('click', () => {
            if (document.documentElement.getAttribute('data-bs-theme') === 'dark') {
                document.documentElement.setAttribute('data-bs-theme', 'light');
                document.getElementById('btnSwitch').classList.add('bx-moon');
                document.getElementById('btnSwitch').classList.remove('bx-sun');
                document.getElementById('nav').style.backgroundColor = "#f8f9fa";
            } else {
                document.documentElement.setAttribute('data-bs-theme', 'dark');
                document.getElementById('btnSwitch').classList.add('bx-sun');
                document.getElementById('btnSwitch').classList.remove('bx-moon');
                document.getElementById('nav').style.backgroundColor = "#212529";
            }
        });
    </script>

</html>

