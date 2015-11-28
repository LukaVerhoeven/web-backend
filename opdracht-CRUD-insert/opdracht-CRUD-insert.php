<?php
$message = array();
$brouwernaam;
$adres;
$postcode;
$gemeente;
$omzet;

if (isset($_POST["submit"]) && isset($_POST["brouwernaam"]) && isset($_POST["adres"]) &&
isset($_POST["postcode"]) && isset($_POST["gemeente"]) && isset($_POST["omzet"])) {
	$brouwernaam = $_POST["brouwernaam"];
	$adres = $_POST["adres"];
	$postcode = $_POST["postcode"];
	$gemeente = $_POST["gemeente"];
	$omzet = $_POST["omzet"];

}else{
	var_dump("post niet set");
}

try {

	if (!empty($brouwernaam) && !empty($adres) && !empty($postcode) &&
	!empty($gemeente) && !empty($omzet)) {

	$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));



	$queryString =  'Insert into  brouwers (brouwernr, brnaam, adres ,postcode , gemeente , omzet)
					values (' . "null" .',"' . $brouwernaam . '","'.$adres .'","'. $postcode . '","' . $gemeente . '","' . $omzet . '")';
var_dump($queryString);

    $statement = $db->prepare($queryString);
    $statement->execute();
}



} catch (Exception $e) {

    $message["text"] = "er is iets misgelopen met het inladen van de database of de query";

	 echo $message["text"];


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>

    body{
      font-family: sans-serif;;
    }

        h1{
            color:white;
            padding:20px;
            padding-left :30px;
            background-color:#a3a2a2;
             width:400px;
            font-size:25px;
            border-radius:10px;
            font-family:sans-serif;

        }
        h2{
            color: #3b3b3b;
        }

        input{
          margin-top: 20px;
          margin-bottom: 20px;
          display: block;
        }



        </style>

</head>
<body>
  <h1>Voeg een brouwer toe</h1>

    <form action="opdracht-CRUD-insert.php" method="post">
      <label for="brouwernaam" >Brouwernaam:</label>
      <input type="text" name="brouwernaam" id="brouwernaam" value="" placeholder="Brouwernaam">
      <label for="adres" >adres:</label>
      <input type="text" name="adres" id="adres" value="" placeholder="adres">
      <label for="postcode" >postcode:</label>
      <input type="buttextton" name="postcode" id="postcode" value="" placeholder="postcode">
      <label for="gemeente" >gemeente:</label>
      <input type="text" name="gemeente" id="gemeente"  value="" placeholder="gemeente" >
      <label for="omzet" >omzet:</label>
      <input type="text" name="omzet" id="omzet" value="" placeholder="omzet">
      <input type="submit" name="submit" value="submit">
    </form>


</body>
</html>
