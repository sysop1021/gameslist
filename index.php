<?php include("dbconnect.php"); ?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>MKBLoMGtmwcpbpn</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="assets/styles.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
	</head>
	<body>
		<div class="box">
			<h1>Movie Knights' Big List of Multiplayer Games that maybe we can play sometime but probably not</h1>
			<div class="formDiv">
				<form action="addgame.php" method="POST">
					Game: <input type="text" name="game">
					Cost: <input type="text" name="cost">
					Where to get: <input type="text" name="source">
					Genre: <input type="text" name="genre">
					Notes: <textarea name="notes"></textarea>
					<button class="myButton" type="submit">Submit</button>
				</form>
			</div>
			<!--<button class="myButton">Log-in</button>-->
			<table>
				<thead>
					<tr>
						<th>Game</th>
						<th>Cost</th>
						<th>Where to get</th>
						<th>Genre</th>
						<th>Notes</th>
						<th>Added by</th>
						<th>Upvotes</th>
					</tr>
				</thead>
				<tbody>
					<?php include("gamelist.php"); ?>
				</tbody>
			</table>
		</div>
	<!-- <script src="js-stuff.js"></script> -->
	</body>
</html>