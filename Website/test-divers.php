<?php

$type = 'mysql:host=localhost;dbname=restaurant_qa';
$user = 'root';
$password = 'root';

try {
  $pdo = new PDO($type, $user, $password);
} catch (PDOException $e) {
  /* file_put_contents('dblogs.log', $e->getMessage() . '<br>');
  echo 'Une erreur est survenue'; */
  exit('Erreur : ' . $e->getMessage());
}
/* testmailcompte@mail.com */
$connect_mail = "fef";
$statementcocompte = $pdo->prepare("SELECT * FROM customer WHERE customer_mail = ?");
$statementcocompte->execute(array($connect_mail));
$compte_customer = $statementcocompte->fetch();

if ($compte_customer === false) {
?>
  <div style="color: #b02a37; margin-bottom: 1rem;">
    Identifiant invalide !
  </div>
<?php

  /* Verify password */

}
print_r($compte_customer);
