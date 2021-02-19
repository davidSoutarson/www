<?php

$travels = [
	'id' => 0, ['departure' => 'Paris', 'arrival' => 'Nantes', 'departureTime'=> '11:00', 'arrivalTime'=> '12:34', 'driver'=>'Thomas'],
	'id' => 1, ['departure' => 'Orléans', 'arrival' => 'Nantes', 'departureTime'=> '05:15', 'arrivalTime'=> '09:32', 'driver'=>'Mathieu'],
	'id' => 2, ['departure' => 'Dublin', 'arrival' => 'Tours', 'departureTime'=> '07:23', 'arrivalTime'=> '08:50', 'driver'=>'Nathanaël'],
	'id' => 3, ['departure' => 'Paris', 'arrival' => 'Orléans', 'departureTime'=> '03:00', 'arrivalTime'=> '05:26', 'driver'=>'Clément'],
	'id' => 4, ['departure' => 'Paris', 'arrival' => 'Nice', 'departureTime'=> '10:00', 'arrivalTime'=> '12:09', 'driver'=>'Audrey'],
	'id' => 5, ['departure' => 'Nice', 'arrival' => 'Nantes', 'departureTime'=> '10:40', 'arrivalTime'=> '13:00', 'driver'=>'Pollux'],
	'id' => 6, ['departure' => 'Nice', 'arrival' => 'Tours', 'departureTime'=> '11:00', 'ArrivalTime'=> '16:10', 'driver'=>'Edouard'],
 	'id' => 7, ['departure' => 'Tours', 'arrival' => 'Amboise', 'departureTime'=> '16:00', 'arrivalTime'=> '18:40', 'driver'=>'Priscilla'],
	'id' => 8, ['departure' => 'Nice', 'arrival' => 'Nantes', 'departureTime'=> '12:00', 'arrivalTime'=> '16:00', 'driver'=>'Charlotte'],
];

$results = [];

if (isset($_POST['city'])) {
	foreach($travels as $travel) {
		if($travel['departure'] == $_POST['city']) {
			$results[] = $travel;
 		}
 	}
}
# 9* verifie si vile == valeu departure
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Recherche du voyage</title>
	</head>
	<body>
		<header>
 			<h1>Rechercher votre voyage</h1>
 		</header>
 		<section>
			<form method="post">
				<label>
					<span>Nom*:</span>
				<input type="text" placeholder="Entrez votre nom" name="name" id="name" required autofocus>
				</label>
				<label>
					<span>Ville*:</span>
					<select name="city" required>
					    <option value="">--Entrez votre ville--</option>
					    <option value="Paris">Paris</option>
					    <option value="Orléans">Orléans</option>
					    <option value="Dublin">Dublin</option>
					    <option value="Nice">Nice</option>
					    <option value="Tours">Tours</option>
					</select>
				</label>
				<label>
					<span>Telephone:</span>
				<input type="tel" placeholder="Votre numero de telephone" name="phone" id="phone">
				</label>
				<label>
					<span>Email*:</span>
				<input type="email" placeholder="email@gmail.com" name="email" id="email" required>
				</label>
				<input class="sendButton" type="submit" name="Submit" value="Rechercher">
			</form>
			<?php if(count($results)): ?>
				<h2>Liste des voyages disponibles</h2>
				<?php foreach($results as $result): ?>
					<p>Depart <?php echo $result['departure']; ?> à <?php echo $result['departureTime']; ?> pour la destination de <?php echo $result['arrival']; ?>, avec <?php echo $result['driver']; ?> </p>
				<?php endforeach; ?>
			<?php else: ?>
				<p>Aucun voyage disponible</p>
			<?php endif; ?>
 		</section>
 	</body>
</html>
