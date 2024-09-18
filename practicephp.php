<?php
	class Person {
	  public $name;
	  public $age;
	}
	
	$person = new Person();
	$person-> name = "Alice";
	$person-> age = 25;
	
	print_r($person);
	
	var_dump($person);

	$name = 'Brad';
	$age = 40;
	$hasKids = true;
	$cashOnHand = 10.5;
	
	var_dump($cashOnHand);
	
	echo "$name is $age years old\n";
	echo "${name} is ${age} years old\n";
	echo '<h3>' . $name . 'is' . $age . ' years old</h3>'

	define('HOST', 'localhost');
	define('USER', 'root');
	define('PI', 3.1416);
	
	echo HOST;
	echo PI;

	class MathOperations {
	    const PI = 3.14159;
	    const EULER_NUMBER = 2.71828;
	  }
	$MathOperations = new MathOperations();
	$MathOperations-> PI = "Alice";
	$MathOperations-> EULER_NUMBER = 25;
	  
	print_r($MathOperations);

	$numbers = [1, 2, 3, 4, 5];
	echo $numbers[3] + $numbers[4];

	$colors = ['red', 'green', 'blue'];
	echo $colors[3];

	$person = [
	      "first_name"=> "John",
	      "last_name"=> "Doe",
	      "age" => 30
	    ];
	    
	echo $person["first_name"];

	$hex = [
	      "red"=> "#f00",
	      "green"=> "#0f0",
	      "blue" => "#00f",
	    ];
	    
	echo $hex["red"];
?>
