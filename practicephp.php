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
?>
