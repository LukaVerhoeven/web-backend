<?php
$message = array();

try {

	$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	
	$queryString =  'SELECT * FROM bieren
					join brouwers b
					ON bieren.brouwernr = b.brouwernr
					WHERE 
					bieren.naam like "du%" and b.brnaam like "%a%"';


    $statement = $db->prepare($queryString);
    $statement->execute();

    $bieren = array();
    while ( $bier = $statement->fetch( PDO::FETCH_ASSOC ) )
		{
			$bieren[]	=	$bier;
		}
	
	
} catch (Exception $e) {

    $message["type"] = "error";
    $message["text"] = "er is iets misgelopen met het inladen van de database";
                
	 echo $message["text"];

 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Document</title>
</head>
<body>
<table>
	<thead><?php foreach ($bieren as $id => $kolom) {
		
		echo "<tr><td>" . $bieren[$id]["naam"] ."</td></tr>"; // $bieren[$id][$kolom]
	}?></thead>
	<tbody></tbody>
	<tfoot></tfoot>

</table>
    
</body>
</html>