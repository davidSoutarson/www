<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>les CONSTANTE dite Magiques </title>
  </head>
  <body>
    <ul>
      <li>__FILE__</li>
      <li>__DIR__</li>
      <li>__FUNCTION__</li>
      <li>__LINE__</li>
      <br> les tois constante suivente sont utilser en programation oriter object  <br>
      <li>__CLASS__</li>
      <li>"__METHOD__"</li>
      <li>__NAMESPACE__</li>
    </ul>

    <table border="1">
      <th>CONSTANTE Magiques </th>
      <th>Sintaxe</th>
      <th>Sont utiser pour :</th>
      <th>exemple en php</th>
      <tr>
        <td>__FILE__</td>
        <td> echo __FILE__</td>
        <td>afiche le chemin complet et le non du fichier</td>
        <td><?php echo __FILE__;  ?></td>
      </tr>
      <tr>
        <td>__DIR__</td>
        <td>echo __DIR__</td>
        <td>afiche le chemin incomplet et le nom du docier</td>
        <td><?php echo __DIR__; ?></td>
      </tr>
      <tr>
        <td>__FUNCTION__</td>
        <td>function test()</br>{ </br>  echo  __FUNCTION__ . br </br> } </br> test(); </td>
        <td>afiche le nom de la fontion dans la quelle elle est appeler</td>
        <td><?php function test(){
            echo  __FUNCTION__ . '</br>';
          }
          test(); ?>
        </td>
      </tr>
      <tr>
        <td>__LINE__</td>
        <td> echo __LINE__</td>
        <td> aficher le numero de la ligne sur la quelle elle est utiliser</td>
        <td><?php echo __line__;  ?> </td>
      </tr>
    </table>

  </body>
</html>
