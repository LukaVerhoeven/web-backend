<?php
$aantalrijen = 10;



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<style>
    th, td {
    border: 1px solid black;
}
</style>
</head>
<body> 
  <table>
  
			<?php for( $i = 0; $i < $aantalrijen; ++$i ): ?>
        
				<tr>       
				                     
				<?php for( $j = 0; $j < $aantalrijen; ++$j ): ?>
                            
				        <td>rij</td>
				

			    <?php endfor ?>
				
				</tr>		

				

			<?php endfor ?>
     
     
      
  </table>
  

   
    
</body>
</html>