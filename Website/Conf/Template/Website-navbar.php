<header class="sticky-top" style="background-color: white;">
  <nav class="navbar navbar-expand-lg bd-navbar">
    <div class="container-fluid">
      <a class="navbar-brand p-0 me-0 me-lg-2 my-4" href="index.php">
        <img src="./Picture/Logo.svg" alt="Logo Quai Antique" class="navbar-logo" />
      </a>
      <button class="navbar-toggler ml-auto custom-toggler" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end d-lg-flex" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Quai Antique</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body justify-content-around">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sectioncarte">Carte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sectionmenu">Menus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sectiongalerie">Galerie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sectioncontact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="dropstart m-3">
        <button class="btn reserve-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user"></i>
        </button>
        <ul class="dropdown-menu">
          <li>
            <?php
            /* Ne pas oublier de mettre le systeme de connexion */
            $user_connected = 0;
            if ($user_connected == 1) {
              echo "Bonjour !";
            } else {
            ?>
            <a class="dropdown-item fw-bold" href="./Espaceconnexion.php">
              <i class="fa-solid fa-door-open"></i>
              Se connecter
            </a>
            <?php
            }
            ?>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item fw-bold" href="#">
              <i class="fa-sharp fa-solid fa-right-from-bracket"></i>
              Se déconnecter
            </a>
          </li>
        </ul>
      </div>
      <div class="m-3">
        <a href="./Reserve-table.php" class="btn reserve-btn">Réserver une table</a>
      </div>

    </div>
  </nav>
</header>

<!-- Scroll to top -->
<div class="scroll_to_top">
  <a href="#"><i class="fa-sharp fa-solid fa-circle-chevron-up fa-2xl"></i></a>
</div>

<main>