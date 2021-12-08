<?php
if (isset($_POST['nom'])) {
  $nom = $_POST['nom'];
}
?>

<div class="response">
  <p>Merci <?= $_GET["prenom"]." ".$_GET["nom"] ?> de nous avoir contacté à propos de <?= $_GET["sujet"] ?>.</p>
  <p> Un de nos conseiller vous contactera soit à l'adresse <?= $_GET["email"] ?> ou par téléphone au <?= $_GET["tel"] ?> </p>
</div>
