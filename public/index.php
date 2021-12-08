<?php
if (isset($_POST['nom'])) {
  $nom = $_POST['nom'];
  header("Location: index.php?ok=3");
/*   print_r($_POST);
  die(); */
  //echo "coucou ".$nom;
  // inserer en BD Eviter le refresh
  //header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Quete Formulaire 1</title>
</head>
<body>
<div class="container">
<form  action="thanks.php"  method="POST">
  <div class="mb-3">
    <label  for="nom" class="form-label">Nom :</label>
    <input  type="text"  id="nom"  class="form-control"  name="nom">
  </div>
  <div class="mb-3">
    <label  for="prenom" class="form-label">Prenom :</label>
    <input  type="text"  id="prenom"  class="form-control"  name="prenom">
  </div>
  <div class="mb-3">
    <label  for="email" class="form-label">Email :</label>
    <input  type="text"  id="email"  class="form-control"  name="email">
  </div>  
  <div class="mb-3">
    <label  for="tel" class="form-label">Tel :</label>
    <input  type="text"  id="email"  class="form-control" name="tel">
  </div>    
  <div class="mb-3">
    <label  for="sujet" class="form-label">Sujet :</label>
    <input  type="text"  id="sujet"  class="form-control" name="sujet">
  </div>
  <div class="mb-3">
    <label  for="message" class="form-label">Message :</label>
    <textarea  id="message"  class="form-control" name="user_message"></textarea>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Envoyer votre message</button>
  </div>
</form>  
</div>
</body>
</html>