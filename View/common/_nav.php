<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Mon blog en MVC et en POO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?php if (isset($_GET['page']) && str_contains($_GET['page'], 'post') || !isset($_GET['page'])) echo 'active' ?>" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if (isset($_GET['page']) && $_GET['page'] === 'connexion') echo 'active' ?>" href="?page=connexion">Connexion</a>
                </li>
        </div>
    </div>
</nav>