<?php require('../inc_conection.php');?>

<?php
//recup info et affichage dans form

$id = $_GET['id'];

//requête
	$result = [];// insialisation
	$result = $mysqli->query('	SELECT 	ville_id
									,ville_nom
									,ville_texte
									,pays_id
							FROM 	villes
							WHERE 	ville_id = '.$id
						);
	//nouvel array
	$row = $result -> fetch_array();

	// variable destinée à l'affichage  uniter
	$nom = $row['ville_nom'];
	$texte = $row['ville_texte'];
	$pays_id = $row['pays_id'];

	$result = [];
	$pays_liste = [];
	$result = $mysqli->query('	SELECT DISTINCT		pays_id as pid
													,pays_nom as pnom
								FROM 				pays
								ORDER BY 			pnom
							');

	while ($row = $result->fetch_array())// a pour une liste
	{
		$pays_liste_pid = $row['pid'];
		$pays_liste_pnom = $row['pnom'];

		$pays_liste[$pays_liste_pid]['pid'] = $pays_liste_pid;
		$pays_liste[$pays_liste_pid]['pnom'] = $pays_liste_pnom;
	}

	/*Partie MAJ de la BDD
	-----------------------------------------------------*/

	if (isset($_POST['submit_form']))
	{
		$ville_nom = $_POST['ville_nom'];
		$ville_texte = $_POST['ville_texte'];
		$ville_id = $_POST['ville_id'];
		$ville_pays_id = $_POST['pays_id'];

		//verification du contenue des variables
		if((empty($ville_nom)) OR empty($ville_texte))
		  {
			$message = '<p class="error"> vous devez saisir le nom d\'une ville et sa présentation. </p>';
		  }
		  else
		  {
			// requete UPDATE ?
			if	(	$mysqli->query('	UPDATE 	villes
										SET 	ville_nom 		= "'.$ville_nom.'"
												, ville_texte 	= "'.$ville_texte.'"
												, pays_id 		= "'.$ville_pays_id.'"
										WHERE 	ville_id 		='.$ville_id
									)
				)
			{
				$message = '<p class="message">La mise à jour de la ville '. $ville_nom .' est effectuée.</p>';
			}
			else
			{
			  $message = '<p class="error">La mise à jour de la ville '. $ville_nom .' n\'est pas effectuée.</p>';
			}
		  }
	}


?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Edition</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>

	<body>
<?php include('admin_menue.php'); ?>

			<!--	1 . Modification de la page de mise à jour d’une ville	-->
<h1>page edition administrateur</h1>

		<div>
			<h2>
				Ajouter une ville
			</h2>

			<?php if(isset($message)) echo $message  ?>

			<form  method="post">
				<p>Nom de la ville : <input 	type="text"
												name="ville_nom"
												value="<?php echo $nom ?>" ></p>
				<p>texte presentation:</br>
				<textarea  	name="ville_texte"
							cols="32"
							rows="8"/>
							<?php echo $texte ?> </textarea></p>
				<input type="hidden" name="ville_id" value="<?php echo $id ?>"/>

				<?php foreach ($pays_liste as $plist) : ?>

					<?php if ($plist['pid'] == $pays_id ): ?>
						<li class="bg_gris">
						<input 	checked="checked"
								type="radio"
								name="pays_id"
								value="<?php echo $pays_id ?> "/>
						<?php echo $plist['pnom'] ?></li>
					<?php else : ?>
						<li> 	<input  type="radio"
									name="pays_id"
									value="<?php echo $plist['pid'] ?> "/>
								<?php echo $plist['pnom'] ?>
						</li>

					<?php endif ?>
				<?php endforeach ?>

				<p> <input type="submit" name="submit_form" value="valider"></p>

			</form>
		</div>
	</body>
</html>
