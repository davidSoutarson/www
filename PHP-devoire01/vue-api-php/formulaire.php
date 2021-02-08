

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formulaire covoituturage</title>
    <link rel="stylesheet" href="../css/master.css">
  </head>
  <body>
    <div id="wrapere">

      <?php include("header.php");  ?>

      <main>
        <?php
        $proposionDeTrager = [
          id => 0,['proposDepart'=>'Paris','arriver' => 'Nantes','proposHeureDepart'=>'11:00','proposHeureArriver'=> '12:34' , 'conducteure' => 'Thomas'],
          id => 1,['proposDepart'=>'Oreléans','arriver' => 'Nantes','proposHeureDepart'=>'05:15','proposHeureArriver'=> '09:32' , 'conducteure' => 'Mathieu'],
          id => 2,['proposDepart'=>'Dublin','arriver' => 'Tours','proposHeureDepart'=>'07:23','proposHeureArriver'=> '08:50' , 'conducteure' => 'Nathanaël'],
          id => 3,['proposDepart'=>'Paris','arriver' => 'Oreléans','proposHeureDepart'=>'03:00','proposHeureArriver'=> '05:26' , 'conducteure' => 'Clément'],
          id => 4,['proposDepart'=>'Nice','arriver' => 'Nice','proposHeureDepart'=>'10:00','proposHeureArriver'=> '12:09' , 'conducteure' => 'Audrey'],
          id => 5,['proposDepart'=>'Nice','arriver' => 'Nantes','proposHeureDepart'=>'10:40','proposHeureArriver'=> '13:00' , 'conducteure' => 'Pollux'],
          id => 6,['proposDepart'=>'Tours','arriver' => 'Tours','proposHeureDepart'=>'11:00','proposHeureArriver'=> '16:10' , 'conducteure' => 'Edourd'],
          id => 7,['proposDepart'=>'Nice','arriver' => 'Anboise','proposHeureDepart'=>'16:00','proposHeureArriver'=> '12:34' , 'conducteure' => 'Priscilla'],
          id => 8,['proposDepart'=>'Nice','arriver' => 'Anboise','proposHeureDepart'=>'12:00','proposHeureArriver'=> '12:34' , 'conducteure' => 'Charlotte'],

        ];

        foreach ($proposionDeTrager as $key => $value)
        {
           echo '<br>';
           foreach ($value as $key => $value)
           {
             echo '' .$value. '';
          }
        }

        echo"<br>" $proposionDeTrager[1],[1], [1], [1] ,[1], [1];



         ?>

    </main>

    <?php include("footer.php"); ?>
    </div>

  </body>
</html>
