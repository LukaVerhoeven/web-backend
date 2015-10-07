<?php

$artikels = array( array("titel" => "Niezende aap en lopende vis: tientallen nieuwe diersoorten ontdekt", "datum" => "5 september 2015", "inhoud" => 'In het oostelijke gedeelte van de Himalaya zijn tussen 2009 en 2014 tweehonderd nieuwe planten- en diersoorten ontdekt. Het gaat onder meer om een niezende aap, een "lopende vis" en een adder die eruit ziet als een prachtig bewerkt sieraad. Dat staat in een nieuw rapport van het Wereld Natuur Fonds.
De afgelopen zes jaar hebben wetenschappers 133 nieuwe plantensoorten, 26 vissoorten, 10 amfibieën, een reptiel, een vogelsoort en een zoogdier beschreven.

Niezende aap
Een van de opvallendste schepsels is de Myanmarese stompneusaap. Jagers beschreven een apensoort met grote lippen en heel wijde neusgaten. In regenperiodes maken de apen niesgeluiden als er water in hun neus loopt. Deze soort werd in 2010 ontdekt, maar is volgens het WNF nu al ernstig bedreigd door zijn kleine leefgebied en jacht.

Dwerslangenkopvis
Een andere opmerkelijke verschijning werd gespot in West-Bengalen in India. Daar dook de dwergslangenkopvis op. Dit roofdier kan lucht opnemen buiten water en kan tot vier dagen op land overleven.

Himalaya bedreigd
Met het rapport wil WNF duidelijk maken dat de Himalaya onder druk staat. De oostelijke Himalaya, dat onder meer Nepal, Bhutan, India en Tibet bestrijkt, is met enorme bergmassieven, grote rivieren en tropische zones een van de rijkste natuurgebieden ter wereld. 

"In de afgelopen zes jaar zijn hier gemiddeld 34 nieuwe soorten per jaar ontdekt. Dat we in de 21ste eeuw zelfs nog een nieuwe apensoort vinden, bewijst hoe uniek dit gebied is. Het moet goed beschermd worden voordat het te laat is", aldus Gert Polet van het WNF.', "afbeelding" => "afbeelding-alleen.png" , "afbeeldingbeschrijving" => "aapje aan het eten" ),

 array("titel" => "120 vissers vermist door tropische storm in Filipijnen", "datum" => "4 september 2015", "inhoud" => 'Op de Filipijnen zijn 120 vissers vermist geraakt tijdens de tropische storm Mujigae, een tyfoon die voor sterke wind en hoge golven zorgt. De storm is nu op weg naar China.
Bijna 30 vissersboten met in totaal meer dan 150 vissers aan boord werden getroffen door de storm in de Zuid-Chinese Zee. Een aantal boten slaagden erin veilig de kust te bereiken. Twee cargoschepen die op weg waren naar Japan visten ook negen vissers uit het water nadat hun boot was gekapseisd.

Van 23 boten met in totaal 120 vissers aan boord, is er nog geen spoor. Politie, kustwacht en het leger hebben zoek- en reddingsoperaties opgestart.

De tyfoon heeft ondertussen bijna de kust van China bereikt. Daar werden op het eiland Hainan en in de provincie Guangdong 60.000 vissersboten teruggeroepen. Tienduizenden mensen werden uit de kustgebieden geëvacueerd. Er worden windsnelheden tot 180 kilometer per uur gemeld. Zowel in Hainan als Guangdong worden hevige regenbuien verwacht. 

Op de luchthaven van Hainan werden alle vluchten opgeschort. Ook alle treinverkeer ligt er stil. Dat is een streep door de rekening van duizenden toeristen die dit weekend op het eiland vertoeven naar aanleiding van de Chinese nationale feestdag.', "afbeelding" => "vissers.png" , "afbeeldingbeschrijving" => "zee en stenen" ),
                  
 array("titel" => "Megatsunami zou ons van de kaart kunnen vegen", "datum" => "3 september 2015", "inhoud" => 'In 2004 kreeg Zuidoost-Azië te maken met een verschrikkelijke tsunami die het leven kostte aan 230.000 mensen. Maar die vloedgolf zou verbleken bij een 244 meter hoge golf die 73.000 jaar geleden de aarde overspoelde. Wetenschappers sluiten een gelijkaardige golf in de toekomst niet uit.

De Fogo is een van de meest actieve vulkanen ter wereld. © Wikipedia.
De monstergolf werd 73.000 jaar geleden veroorzaakt doordat de Fogo-vulkaan op de Kaapverdische eilanden plots ineenstortte. Ruim 167 kubieke kilometer aan rotsblokken die soms tot 770 ton konden wegen, vielen in de oceaan en veroorzaakten een 244 meter hoge golf die een eiland 48 kilometer verderop overspoelde. Ter vergelijking: de tsunamis in Zuidoost-Azië (2004) en in Japan (2011) bereikten hoogtes van om en bij de 30 meter. 

De Fogo is met 2.829 meter een van de grootste en meest actieve vulkanen ter wereld.', "afbeelding" => "tsunami.png" , "afbeeldingbeschrijving" => "tsunami" )
                  
                 
);

                
                  

$overzicht = true;

if ( isset ( $_GET['artikelnummer'] ) )
	{
		$id = $_GET['artikelnummer'];


		if ( array_key_exists( $id , $artikels ) )
		{
			$artikels 			= 	array( $artikels[$id] );
			$overzicht	=	false;
		}		
	}else{
    $overzicht	=	true;
    
}

/*please explain why artikelnummer stay null???????????*/

    
    
    if  ($_GET["artikelnummer"] == null){
                      $overzicht = true;
                          
        }else  {
         
         $overzicht = false;
         $artikels = $artikels[$_GET["artikelnummer"]];
     }
         
  
                


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<style>
    
    
    .overzichtklein{
        
    }
    .overzichtklein {
    	float:left;
			width:288px;
			margin:16px;
        	background-color: #e2e8b6;        
}
    .overzichtklein h3, p, img{
     margin-left:20px;
    color:#8b2626;
    }
    
    .overzichtklein img{
     width: 250px;   
        
    }
     .overzichtklein a{
       float: right; 
       padding: 20px;
        margin-right:10px;
        
    }
    
    .overzichtgroot{
        			width:1000px;
			margin:16px;
        	background-color: #e2e8b6; 
    }
    .overzichtgroot h3, p , img{
      
    }
    
</style>
</head>
<body>
  <?php foreach( $artikels as $artikelnummer => $artikels): ?>
   <div class="<?php if ($overzicht){
                      echo "overzichtklein";
                  }else{
                      echo "overzichtgroot";
                  }
               
               ?>">
       <h3 >
           <?= $artikels["titel"]?>
       </h3>
       <p><?= $artikels["datum"]?></p>
        <img src="img/<?= $artikels["afbeelding"]?>">
        <p><?php if($overzicht){ echo substr($artikels["inhoud"], 0 , 50).  "...";} else{echo $artikels["inhoud"];
               } ?></p>
        <a href="opdracht-get.php?id=<?= $artikelnummer?>">lees meer</a>
         
   </div>
   
 <?php endforeach ?> 
    
</body>
</html>