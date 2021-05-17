<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="form_01" action="texteFORM.php" method="post" name=form_01 enctype="multipart/form-data">
      <input  name="date" type="hidden" value=""> <!-- latribut hiden permt de cache lle chanp input date -->

      <fieldset>
        <legend> information  personelle</legend>
        <p>
          <label for="nom"> Nom : </label>
          <input type="text" name="nom" id="nom" value="" placeholder=" ecriver votre Nom ici" autofocus ="true" autocomplete="on" maxlength="25" requierd >
        </p>
        <p>
          <label for="prenom">Prenom: </label>
          <input type="text" name="prenom" id="prenom" value="" placeholder=" ecriver votre Prenom ici" autofocus ="true" autocomplete="on" maxlength="25" requierd >
        </p>
        <p>
          <label for="email">Email</label>
          <input type="email" name="email" id="fichier" placeholder="ecriver votre maile" value="" autocomplete="on" maxlength="60">
        </p>

        <p>
          <label for="couleur">quelle et votre couleur préférée ?</label>
          <select name="couleur" id="couleur" placeholder= "votre couleur préferee email">
            <option value="blanc">blanc</option>
            <option value="noir">noir</option>
            <option value="rouge">rouge</option>
            <option value="bleux">bleux</option>
          </select>
        </p>
      </fieldset>

      <fieldset>
        <legend>Vaux otorisation et mesage</legend>
        <p>
          <label for="inscription_newletteur"> s'incrire à la newletteur</label>
          <input type="checkbox" name="inscription_newletteur" id="inscription_newletteur" >
        </p>

        <label for="pub">voulez resevoir notre pub:</label>
        <p>
          Oui <input type="radio" name="pub" value="oui">
          Non <input type="radio" name="pub" value="non">
        </p>

        <p>
          <label for="mesage">votre mesage :</label>
          <textarea name="mesage" rows="3" cols="30" id="mesage"></textarea>
        </p>
        </fieldset>
        <fieldset>
          <legend>envoie et validation</legend>
        <p id="envoiyer">
          <input type="submit" name="Envoiyer" value="Envoiyer">
        </p>
      </fieldset>


    </form>
    <h2> un peu de theorie lier au formulaire</h2>
    <p>
    les formulaire sont la base dun site webe .
    html pour le creer
    php pour l'anvoyer et le traiter

    dans cette partie nous alon voir sons ecriture.

    la l'atribut qui sepsifie l'anvoie et metod il peu prendre deux valueur get post

    nous priviligiron la metode post plus securiser mais pas infaible
    verifier toujour les doner envoiyer par un tilisateur.


    latribut name (definie le nom du formulaire)
    latribut  id (definie l'identifient)

    La baise < form > ne peu pas contenir dortre balise < form > Mai il peut y avoir
    plusieur formulaire sur une maime page .

    La balise < label > définit une étiquette (repant le nom) d’un champ de formulaire d’une
    page web HTML (balise de type inline).
    La balise < label > possède un attribut for qui fait référence (repant le nom de) à l’attribut id d’un champ de formulaire.

    Cela permet ainsi d’associer la balise < label> avec le champ auquel elle correspond.
  </p>

  liste des champ

  <table border="1">
    <th>valeur</th>
    <th>desscripltion</th>
    <tr>
      <td>boutton</td>
      <td></td>
    </tr>
    <tr>
      <td>checkbox</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
  </table>


  </body>
</html>
