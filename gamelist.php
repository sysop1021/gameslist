<?php
	$gamesQuery = "SELECT * FROM games_list";
	$gamesData = mysqli_query($db, $gamesQuery);
	$gamesRows = mysqli_fetch_assoc($gamesData);
	
	do
	{
		echo "<tr>";
		echo "<td>" . $gamesRows['game_name'] . "</td>";
		
		if ($gamesRows['game_price'] != "0.00")
		{
		echo "<td>$" . $gamesRows['game_price'] . "</td>";
		}
		
		else
		{
			echo "<td>free</td>";
		}
		
		echo "<td>" . $gamesRows['game_source'] . "</td>";
		echo "<td>" . $gamesRows['game_genre'] . "</td>";
		echo "<td>" . $gamesRows['game_notes'] . "</td>";
		echo "<td>" . $gamesRows['game_adder'] . "</td>";
		echo "<td>" . $gamesRows['game_upvotes'] . "</td>";
		echo "</tr>";
	}
	while($gamesRows = mysqli_fetch_assoc($gamesData));
?>