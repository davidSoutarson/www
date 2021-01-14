<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>fomulaire covoiturage</title>
  </head>
  <body>

      <?php include ("header.php") ?>

    <main>
      <form class="fomulaire" action="resulta.php" method="post">

        <p>
            <label for = "nom">Entre votre nom : </label>
            <input type="text" name="nom" value="">
         </p>
        <p>
            <label for = "premon">Entre votre prénom : </label>
            <input type="text" name="prenom" value="">
        </p>
        <p>
            <label for="email">Adresse email</label>
            <input type="text" name="email" value="">
         </p>
        <p>
            <label for="telephone">Numéro de téléphone</label>
            <input type="text" name="telephone" value="">
        </p>
        <p> propauser vaure covoiturage </p>
        <p> Sélection de la ville de départ <input type="text" name="villeDepart" value=" Ville de Depart"> Heure de Depart:<input type="text" name="departTime" value="Heure de Depart"> </p>
        <p> Sélection de la ville de ariver <input type="text" name="villeAriver" value=" Ville d'Ariver "> Heure d'ariver :<input type="text" name="ariverTime" value="Heure d'Ariver "> </p>


      </form>

    </main>

  </body>
</html>
