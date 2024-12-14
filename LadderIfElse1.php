<?php

	$marks=36;

	if($marks >= 90){
		echo"Congraculation Pass With 'A+' grade";
	}else if($marks >= 80){
		echo"Congraculation Pass With 'A' grade";
	}else if($marks >= 70){
		echo"Congraculation Pass With 'B+' grade";
	}else if($marks >= 60){
		echo"Congraculation Pass With 'B' grade";
	}else if($marks >= 50){
		echo"Congraculation Pass With 'c' grade";
	}else if($marks >= 36){
		echo"Congraculation Pass With 'D' grade";
	}if($marks <= 35){
		echo"Sorry you are Fail";
	}

?>