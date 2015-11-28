<?php

try {

	$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_POST["delete"]))) {
		/*
		$queryDeleteString ='delete b from bieren b where biernr is '. $_POST["delete"]) .'';
		*/
		$statementdelete = $db->prepare($queryDeleteString);
		$statementdelete->execute();

}

	$queryString =  'SELECT * FROM bieren order by biernr';


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
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
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

    	<body>


<form  method="post">


					<?php
					$value;
				        foreach ($bieren as $id => $rij) {
				            echo "<tr>";
				        foreach ($rij as $i => $kolom) {


				            echo "<td>" . $kolom ."</td>";
										if($rij=="biernr"){
											$value = $kolom;

										}

				            }
										echo "<td><button type='delete' name='delete' value=" . $value ."> <img src='icon-delete.png' alt='delete' /></button><td>";
				            echo "</tr>";
				        }
							?>
	</form>

				</tbody>
					<tfoot></tfoot>

				</table>

				</body>
				</html>
