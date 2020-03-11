<!DOCTYPE html>
<html>
	<head>
		<title>Rainbow Six Siege</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body bgcolor=white>
		<h1>Rainbow Six Siege</h1>
		<a href="rainbow.html">Main</a> |
		<a href="AttckOps.html">Attackers</a> |
		<a href="DfndOps.html">Defenders</a> |
		<a href="renown.php">Renown Calculator</a>
		<hr />


		<h3>Insert your numbers and it will spit out on average how long it will take for you to get the amount you want*</h3>
		<h6>*The numbers used to calculate are average and have gone through severe testing in Operation Ember Rise, results may vary</h6>
	<form action='renown.php' method='post'>
		Current renown: <input type="text" value="" name="current" /><br />	
		Renown needed: <input type="text" value="" name="need" /><br />
		Gamemode you play:  <select name="gamemode"><br />
  		<option value="casual">Casual</option>
  		<option value="ranked">Ranked</option>
		</select> <br />
		<input type="submit" value="Go!" name="calculate">

<?php
$total;
$current;
$need;
$gamemode;
$matches;
$casual = "casual";
$ranked = "ranked";


		if(!empty($_POST['current']) && !empty($_POST['need']) && !empty($_POST['gamemode'])) 
		{
			$current = $_POST['current'];
			$need = $_POST['need'];
			$gamemode = $_POST['gamemode'];
				

				switch($gamemode)
				{
					case "casual":
						$need = $need - $current;
						$matches = $need / 225;
						$total = $matches * 20;
						$total = $total / 60;
						$total = round($total, 1);
						echo "<br />The amount of hours you will have to play to get your new operator on average is: <b>" . $total . "</b>";
						break;

					case "ranked":
						$need = $need - $current;
						$matches = $need / 375;
						$total = $matches * 30;
						$total = $total / 60;
						$total = round($total, 1);
						echo "<br />The amount of hours you will have to play to get your new operator on average is: <b>" . $total . "</b>";
					break;
						
				}
		}

?>
