<?php
$message = array();

try {

	$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


	$queryString =  'SELECT *
                    FROM bieren
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
    $message["text"] = "er is iets misgelopen met het inladen van de database of de query";

	 echo $message["text"];


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Document</title>
    <style>
        body{
            font-family: sans-serif;
        }
        tr:nth-child(1n){
             background-color: #f0f0f0;
        }
        tr:nth-child(2n){
           background-color: #c7c7c7;
        }
    </style>
</head>
<body>
<table>
	<thead>
		<tr>
			<?php

        for ( $i = 0; $i < $statement->columnCount(); $i++ )
		{
            if($i < 5 || $i > 5 ){
		echo "<td>" . $statement->getColumnMeta( $i )['name'] ."</td>";
            }

            }
	  ?>

		</tr>
	</thead>

	<tbody>





	<?php
        foreach ($bieren as $id => $rij) {
            echo "<tr>";
        foreach ($rij as $i => $kolom) {


            echo "<td>" . $kolom ."</td>";

            }
            echo "</tr>";
        }

        ?>

	<?php /*foreach ($bieren as $id => $kolom) {

		echo "<tr><td>" . $id ."</td>
            <td>" . $bieren[$id]["biernr"] ."</td>
            <td>" . $bieren[$id]["brouwernr"] ."</td>
            <td>" . $bieren[$id]["naam"] ."</td>
            <td>" . $bieren[$id]["alcohol"] ."</td>
            <td>" . $bieren[$id]["soortnr"] ."</td>
            <td>" . $bieren[$id]["brnaam"] ."</td>
            <td>" . $bieren[$id]["adres"] ."</td>
            <td>" . $bieren[$id]["postcode"] ."</td>
            <td>" . $bieren[$id]["gemeente"] ."</td>
            <td>" . $bieren[$id]["omzet"] ."</td>
            </tr>";
	} */ ?>


	</tbody>
	<tfoot></tfoot>

</table>

</body>
</html>
