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

		static $instance;

		function __construct(){
			parent::__construct();
			parent->numChildren = parent->numChildren + 1;
		}

		function __clone(){
			this->instance = clone this->instance;
		}

		function countdown($num){
			echo parent::countdownHeading($num);
		}
	}
?>