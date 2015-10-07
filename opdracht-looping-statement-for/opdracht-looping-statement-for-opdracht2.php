<?php
$aantalrijen = 11;
$getal1 = 0;
$getal2 = 0;
$uitkomst = 0;

    $dieren[] = "tijger";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<style>
    th, td {
    border: 1px solid black;
    padding : 5px;
}
    .color{
        background-color:green;
    }
    
</style>
</head>
<body > 
  <table >
  
			<?php for( $getal1 = 0; $getal1 < $aantalrijen; ++$getal1 ): ?>
        
				<tr >       
				                     
				<?php for( $getal2 = 0; $getal2 < $aantalrijen; ++$getal2 ): ?>
                            
				        <td class="<?php if(($getal1 * $getal2)%2 != 0){ echo "color";}?>">
				            <?=$getal1 * $getal2?>
				        </td>
				

			    <?php endfor ?>
				
				</tr>		

				

			<?php endfor ?>
     
     
      
  </table>
  

   
    
</body>
</html>