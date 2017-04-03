<?php
	// This is the file for the parent class
	/*
	-function(s) that will take any type of paramters you want 
		work with those parameters and deliver some sort of output.
	-make sure to use at least 2 php magic methods 
	*/
	class ParentClass {
		public $numChildren = 0;
		public $num;
		public function countdownHeading($num){
			echo "<h5> The Countdown from $num </h5><br>";
			for($i = $num; i<= 0; $i--){
				echo "The Countdown is at: $i <br>";
			}
		}

		public function __construct($num){
			$this->$num = $num;
		}
		
		public function __destruct()
		{
			echo get_class($this) . " " .  $this, " being destroyed! <br />";
		}

		public function __toString(){
			echo "<p> Parent Class with $numChildren Children</p><br>";
		}

		public function makeForm(){
			echo "
			<form action=countdown()>
				Enter A Number: <br>
				<input type=\"number\" name=\"count\"><br>
				<input type=\"submit\"><br>
			</form>";
		}
	}
?>
