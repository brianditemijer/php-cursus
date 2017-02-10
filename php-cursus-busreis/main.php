<?php

	//$bool = 326; echo "De waarde is " . $bool;
	//$test = 324;
	
// Dit is Manier 1.
	//	echo $bool > $test ? " Het is waar<br>" : "Het is niet waar <br>";
	//	echo gettype($bool);
		
// Dit is manier 2. (voorkeur)	
	//	if ($bool > $test) {
	//		echo " Het is waar<br>";			
	//	} else {
	//		echo  " Het is niet waar<br>";
	//	}
	
// Hoe laat leven we eigenlijk?	
		$nu = date("H"); //Hoe laat is het nu (in uren)
		if ($nu >= 12) {
			echo "Het is middag";
		} else if ($nu > 6) {
			echo "Het is ochtend";
		} else {
			echo "Het is nacht";
		}