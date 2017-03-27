<?php 
	// this file will extend PArentClass.php

	/*
	You can have any number of methods that 
	will in some way use the parent class 
	but also implemennt it's own separate functionality

	- at least 2 php magic methods
	- clone the original object for later use
	*/
	class ChildClass extends ParentClass {
		public $num;


		public function __construct($n){
			parent::__construct();
			$num = $n;

			//parent->numChildren = parent->numChildren + 1;
		}

		public function __clone(){
			clone this;
		}

		public function setNum($n){
			$num = $n;
		}
		public function countdown(){
			parent::countdownHeading($num);
		}
	}
?>