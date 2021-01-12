<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>

    </header>
    <main>
      <?php

        // le php dispose de plus de mille fonctions prêtes à l'emploi
        //de plus nous avons la possibilité de créer nos propres fonctions
       // une fonction c'est un bloc qui va contenir une série d'instruction
       // lorsque l'on fait appel à une fonction le bloc de code contenue dans celle-ci va s'exécuter
      // dans le cas des fonctions prêtes à l'emploi il nous suffit de faire appel à la fonction et le php sera quelle fonction exécuter
      //les fonctions peuvent renvoyer un résultat différent en fonction des arguments 'paramètres' que l'on va leur soumettre
      //un paramètre c'est une valeur que l'on va donner à une fonction afin qu'elle exécute sa série d'instruction
      // dans la majoriter des cas une fonctions revat un resultas mais se nais pas obligatoir
      //le nom des fontion et insensible a la caset

    #  function Nonfontion(paramètre){
    #    code executer par la fontion;
    #  }

    //
    return mes fin a la fonction
#________________fin de definiton______________________#

//mon exemple : a travailler

        function BonjourUtilisateur($prenom){

          echo "bonjour ".$prenom. ' !<br>';
        }

        BonjourUtilisateur('david ');

      //  echo $prenom ; je constate pour l'insetemp que ma variable nes pas recuperable clasiquement ?

      function MoisNum($mois,$num){
        echo $mois. ' : ' .$num. ' <br>';
      }
      MoisNum('janvier', 01 );

      function DireBonjour (){
        return "bonjour";
      }

      $Bonjour = DireBonjour();

      echo $Bonjour;



       ?>

    </main>
    <footer>

    </footer>
  </body>
</html>
