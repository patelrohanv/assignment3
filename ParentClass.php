<?php
	// This is the file for the parent class
	/*
	-function(s) that will take any type of paramters you want 
		work with those parameters and deliver some sort of output.
	-make sure to use at least 2 php magic methods 
	*/
	class ParentClass {
		public $numChildren = 0;
		public $thisCount;

		public function countdownHeading($num){
			echo "<h5> The Countdown from $num </h5><br>";
		}

		function __construct($count){
			$thisCound = $count;
		}

		function __toString(){
			echo "<p> Parent Class with $numChildren Children</p><br>";
		}
	}
?>
