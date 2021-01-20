<?php
	echo "My first";
	echo "<br>";
	$x = (rand (10,30)) ;
		echo "<center><h1>$x</h1></center>";
		$text1 = "learning";
		$text2 = "movie";	
		echo "i love " .$text1 ." from " .$text2. " for2";
	
		echo "<br>"	;
		echo str_replace("mamad","ali","mamad rft khune ali");
		echo "<br>";
		$f = 10.5 ;
		var_dump(is_int ($f));
		echo "<br>";
		var_dump(is_float($f));
		echo"<br>";
		echo"<br>";
		var_dump(is_numeric($x));
		echo"<br>";
		echo"<br>";
		var_dump(is_numeric ($f));
		
		echo "<br>";
		echo "<br>";
			$a = 123.25;
			$int_cast = (int)$a;
			echo "$int_cast";
			echo"<br>";
			 $float_cast = (float)$a;
			 echo "$float_cast";
			 echo"<br>";
			 echo (abs(-46));
			 echo"<br>";
		     echo (sqrt(43));
			 echo"<br>";
			 echo (round(25.50));
			 echo"<br>";
			 echo (rand(20,123));
			 echo"<br>";
			 define("nun", ["بربری","سنگک","لواش"]);
			 echo nun[2];
			 echo"<br>";
		define("GREETING"	, "welcome people");
		function myTest(){
		echo GREETING;}
				myTest();
				  echo "<br>";
				var_dump($x === $f); 
				echo"<br>";
			$m = 20;
			$r = 40;
			if ($m ==$r) {
			echo "okaaaay";}
				elseif  ($r > $m) {
				echo "moz";}
				else {echo "hichi";}
				echo"<br>";
				
					switch ($m) {
						case "40":
							echo "ur favorite num is  40";
						break;
						case "30":
							echo "ur favorite num is 20";
						break;
						default:
							echo "yor favorit is not there";
								}
								echo "<br>";
						while($m <= 30) {
							echo "ur chosen number is: $m <br>";
							$m++ ;
										}
						echo "<br>";				
						do {
							echo "num : $m <br>";
							$m++ ;
							}while ($m <= 40) ;
							echo"<br>";
							
							$mashin = array ("BMW"=>"1965" , "BENZ"=>"2000");
								foreach ($mashin as $b => $val) {
									echo  "$b = $val<br>";
																}	
							echo"<br>";
								function family($fname) {
									echo "$fname jafari<br>";
														}
								family ("shahriar");								
								family ("saqar");
								family ("mamad");
								family ("asqr");
								
								echo"<br>";
								function setHeight(int $maxheight = 70) { 
								 echo "The height is :$maxheight <br>";
								}
								setHeight(50);
								setHeight(35);
								setHeight(71);
							echo "<br>";
							$game = array ("fifa" , "pes" , "cod");
							echo count ($game);
							echo "<br>";
							$arz = array (
								array ("dollar",25000,23000),
								array ("euro",28000,26000),
								array ("lir",5000,3500)
								);
								echo $arz[0][0].":تو بازار :".$arz[0][1].",فروش ما:".$arz[0][2].".<br>";
								echo $arz[1][0].":تو بازار :".$arz[1][1].",فروش ما:".$arz[1][2].".<br>";																								
								echo $arz[2][0].":تو بازار :".$arz[2][1].",فروش ما:".$arz[2][2].".<br>";
								
								
								
								
													
				?>