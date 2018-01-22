<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
	$username='equivpqo_tape';
	$password='xrb^^@4[aN^_';
	$database='equivpqo_tapes';
	
	$db = mysqli_connect('localhost', $username, $password, $database) or die('Error connecting to MySQL server.');	
?>
<?php
	//Step2
	$query = "SELECT * FROM `tapes` WHERE `ID` = '" . $_GET['ID'] . "' LIMIT 0 , 30";
	
	$result = mysqli_query($db, $query) or die('Error querying database.');
	$row = mysqli_fetch_array($result);
		echo "<title>Equivalent Exchange Records - " . $row['TITLE'] . "</title>";
		echo "<link href=\"main.css\" rel=\"stylesheet\" type=\"text/css\">
			</head>

			<body>
			<img src=\"img/EE_LOGOALT.png\" width=\"100\" height=\"100\" alt=\"Equivalent Exchange Logo\" class=\"center\"/>
			<br>
			<br>
			<table width=\"200\" border=\"0\">
  				<tbody>
    				<tr>
      					<td><a href=\"main.html\">Home</a></td>
      					<td><a href=\"tapes.html\">Tapes</a></td>
      					<td><a href=\"contact.html\">Contact</a></td>
    				</tr>
  				</tbody>
			</table>";
		echo "<br><br><br><hr><br><br>";
	
		echo "<h1 class=\"center\">" . $row['TITLE'] . " - " . $row['ARTIST'] . "</h1>";
	
		echo "<img src=\"img/album_art/" . $row['IMG'] . "\" width=400 height=400 alt=\"" . $row['TITLE'] . "\" class=\"center\"/>";
	
		echo "<br><br>";
		echo "<p class=\"info-center\">" . $row['DESCRIPTION'] . "</p>";
		echo "<br><br><br><br>";
		echo "<div class=\"audio-embed\">" . $row['LISTEN_LINK'] . "</div>";
	?>
	<br>
	<br>
	<br>
	
</body>
<?php mysqli_close($db); ?>
</html>
