<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <header>
      <h1>calculette casio XXXXXXX</h1>
    </header>
    <main>

      <div class="box-calculette">

          <form class="calculette" action="index.php" method="post" >
            <div class="afichage">
              <style >
                .afichage { border: solid 2px black; width: 280px; text-align: center; padding: 0px; color: red;}
                .modulo p {color: red; padding: 0px;margin: 0px;}
                .resuta {border: solid 4px green;background-color:black; color: white;width: 190px; }
                .chifres { margin:0 auto; border: solid 2px black; width:100px; height: 100px; }
              </style>
               <label for="mombre"> operation </label>
               <p><input type="int" name="cacule" value="<?php

                        echo  $_POST['chifre'];

                        if ($_POST['signe'] === '+') {
                          echo "+";
                        }
                        elseif ($_POST['signe'] === '-') {
                          echo "-";
                        }
                        elseif ($_POST['signe'] === '*') {
                          echo "*";
                        }
                        elseif ($_POST['signe'] === '/') {
                          echo "/";
                        }

                ?>" > </p>

               <input type="submit" name="signe" value="+" onclick="+">
               <input type="submit" name="signe" value="-" onclick="-">
               <input type="submit" name="signe" value="*" onclick="*">
               <input type="submit" name="signe" value="/" onclick="/">

               <div class="chifres">
                 <input type="submit" name="chifre" value="1" onclick="1">
                 <input type="submit" name="chifre" value="2"onclick="2">
                 <input type="submit" name="chifre" value="3" onclick="3">
                 <input type="submit" name="chifre" value="4" onclick="4">
                 <input type="submit" name="chifre" value="5" onclick="5">
                 <input type="submit" name="chifre" value="6" onclick="6">
                 <input type="submit" name="chifre" value="7" onclick="7">
                 <input type="submit" name="chifre" value="8" onclick="8">
                 <input type="submit" name="chifre" value="9" onclick="9">
                 <input type="submit" name="chifre" value="0" onclick="0">
               </div>
               <input type="submit" name="Submit" value="Entrez">
            </div>

            <?php
              echo var_dump($_POST);


             $_POST['chifre'];
             $_POST['signe'];

             echo $_POST['chifre'];
             echo $_POST['signe'];

             if ($_POST['signe']=== '+') {
               echo " adition";
             }
             elseif ($_POST['signe']=== '-') {
               echo " soutraction";
             }
             elseif ($_POST['signe']=== '*') {
               echo "multiplication";
             }
             elseif ($_POST['signe']=== '/') {
               echo "division";
             }




             ?>
          </form>




      </div>
    </main>
    <footer>
      <p>Contidra des information sur les but est objectif de notre programe .</p>
    </footer>

  </body>
</html>
