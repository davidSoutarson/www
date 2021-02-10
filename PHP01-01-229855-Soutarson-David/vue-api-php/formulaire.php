<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>fomulaire</title>
    <link rel="stylesheet" href="../css/master.css">
  </head>
  <body>
    <div id= wraper>

      <?php include 'header.php' ?>
      <main>

        <div class="contenaire">
          <form class="form-covoit" action="form-covoit" method="post">

              <div class="box-nom ">
                <p> <label for="nom">ecriver votre </label></p>
                <input type="text" name="nom" value=""  placeholder="">
              </div>

              <div class="box-prenom ">
                <p> <label for="prenom">ecriver votre </label></p>
                <input type="text" name="prenom" value="" placeholder="">
              </div>

              <div class="box-email ">
                <p> <label for="email">ecriver votre </label><p/>
                <input type="text" name="email" value=""  placeholder="">
              </div>

              <div class="box-tel ">
                <p> <label for="telephone">ecriver votre </label></p>
                <input type="number" name="telephone" value=""  placeholder="">
              </div>

              <div class="box-ville">
                <p> <label for="">choisiser votre ville</label></p>
                <select class="" name="ville_de_depart">
                  <option value=""></option>
                </select>
              </div>

              <div class="bouton">
                <input type="submit" name="validation" value="valider" >
              </div>

            </form>
          </div> <!-- fin div contenaire -->
          <?php include 'footeur.php' ?>
        </div> <!-- fin div wraper -->

      </main>

    </div>
  </body>
</html>
