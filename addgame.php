<?php

    include("dbconnect.php");
	
	$gameStr = mysqli_real_escape_string($db, $_POST['game']);
	$costStr = mysqli_real_escape_string($db, $_POST['cost']);
	$sourceStr = mysqli_real_escape_string($db, $_POST['source']);
	$genreStr = mysqli_real_escape_string($db, $_POST['genre']);
	$notesStr = mysqli_real_escape_string($db, $_POST['notes']);
	
	$addQuery = "INSERT INTO games_list (game_name, game_price, game_source, game_genre, game_notes, game_adder, game_upvotes) VALUES ('$gameStr', '$costStr', '$sourceStr', '$genreStr', '$notesStr', 'matt', '0');";
		
	$q = mysqli_query($db, $addQuery);
	
	if ($q)
	{
		header("Location: index.php");
	}
	
	else
	{
		echo "Something's fucked: " . mysqli_error($db);
	}
	
?>