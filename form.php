<!DOCTYPE HTML>
<html>

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Résultats formulaire</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
 </head>

 </head>

 <body>
  <header>
  </header>

    <section>
      <h1>Données du formulaire</h1>
      <p><?php
      echo "<br/>";
      echo("Votre nom est:" . " " . $_POST["user_nom"]);
      echo "<br/>";
      echo("Votre prénom est:" ." " . $_POST["user_prenom"]);
      echo "<br/>";
      echo("Votre Adresse Mail est:" ." " . $_POST["user_mail"]);
      echo "<br/>";
      echo("Votre Sexe est:" ." " . $_POST["optionGenre"]);
      echo "<br/>";
      echo("Vous résidez en:" ." " . $_POST["pays"]);
      echo "<br/>";
      echo("Vous nous contactez pour ce problème:" ." " . $_POST["problem"]);
      echo "<br/>";
      echo("Message :" ." " . $_POST["message"]);
      echo "<br/>";
       ?></p>

    </section>
 </body>
</html>
