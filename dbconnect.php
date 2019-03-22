<?php
	$db = mysqli_connect("localhost", "root", "", "mp_games");

	if (mysqli_connect_errno())
	{
		echo "Something's fucked up: " . mysqli_connect_error();
	}
?>