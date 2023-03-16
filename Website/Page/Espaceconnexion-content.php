<!-- Bandeau Top -->

<section style="
    background: url(./Picture/Burger-zoom.jpeg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
  <div class="text-center p-5">
    <h1 style="font-size: 60px; color: white; text-transform: uppercase; paint-order: stroke fill; stroke-color: #a4872c; stroke-width: 5px;">
      Espace connexion
    </h1>
  </div>

</section>

<!-- Form connect compte -->

<section class="connect_compte_section p-5">
  <div class="container-fluid text-center">
    <h1>Se connecter à votre compte</h1>
    <form method="POST" id="formconnect" class="needs-validation" action="Espaceconnexion.php" enctype="multipart/form-data" novalidate>

      <!-- Mail -->

      <div class="row col-sm-4 mx-auto" style="margin-bottom: 1rem;">
        <label for="connect_email" class="form-label">Identifiant (mail)</label>
        <input type="email" class="form-control" pattern="(\w+\.?|-?\w+?)+@\w+\.?-?\w+?(\.\w{2,3})+" value="<?php echo (isset($_POST['connect_email'])) ? htmlspecialchars($_POST['connect_email']) : '' ?>" placeholder="monmail@mail.com" name="connect_email" id="connect_email" required>
        <div class="invalid-feedback">
          Vous devez entrer une adresse mail valide !
        </div>
      </div>

      <!-- Password -->

      <div class="row col-sm-4 mx-auto" style="margin-bottom: 1rem;">
        <label for="connect_password" class="form-label">
          Mot de passe
        </label>
        <input type="password" class="form-control" pattern="^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,16}$" value="<?php echo (isset($_POST['connect_password'])) ? htmlspecialchars($_POST['connect_password']) : '' ?>" placeholder="************" name="connect_password" id="connect_password" required>
        <div class="invalid-feedback">
          Vous devez entrer un mot de passe valide !
        </div>
      </div>

      <?php
      if (isset($_POST['submit_connect_form']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $connect_mail = test_input($_POST['connect_email']);
        $connect_password = test_input($_POST['connect_password']);

        try {
          $statementcocompte = $pdo->prepare("SELECT * FROM customer WHERE customer_mail = ?");
          $statementcocompte->execute(array($connect_mail));
          $compte_customer = $statementcocompte->fetch();

          /* Mail wrong */

          if ($compte_customer === false) {
      ?>
            <div style="color: #b02a37; margin-bottom: 1rem;">
              Identifiant invalide !
            </div>
            <?php

            /* Verify password */

          } else {
            if (password_verify($connect_password, $compte_customer['customer_password'])) {
            ?>

              <!-- Connexion validé -->

              <script type="text/javascript">
                swal("Connecté", "Vous pouvez dès maintenant l'utiliser !", "success").then((value) => {
                  window.location.replace("Reserve-table.php");
                });
              </script>

            <?php
            } else {
            ?>
              <div style="color: #b02a37; margin-bottom: 1rem;">
                Identifiant invalide ou mdp !
              </div>
      <?php
            }
          }
        } catch (Exception $e) {
          echo 'Une erreur s\'est produite, veuillez réessayer: ' . $e->getMessage();
        }
      }
      ?>

      <div style="margin-bottom: 1rem;">
        <button type="submit" name="submit_connect_form" class="btn reserve-btn ms-3" style="text-transform: uppercase;">
          Créer le compte
        </button>
      </div>
    </form>
  </div>
</section>

<!-- Links -->

<section>
  <div class="container-fluid text-center">
    <p>Mot de passe oublié ?
      <a class="links" href="#">Cliquer ici</a>
    </p>
    <p>Pas encore de compte ?
      <a class="links" href="./Creationcompte.php">En créer un ici</a>
    </p>
  </div>
</section>