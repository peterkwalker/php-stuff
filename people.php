<?php

class person {
   public $firstName;
   public $surname;

   public function __construct($par,$par1) {
     $this->firstName = $par;
     $this->surname = $par1;

   }

   public function getFirstName(){
   	return $this->firstName;
   }

   public function getSurname(){
   	return $this->surname;
   }


}

class customer extends person {

	public $email;

    public function __construct($par,$par1,$par2) {
    parent::__construct($par,$par1,$par2);
    $this->email = $par2;
    $this->customer = true;
    }

    public function showEmail(){
    	echo $this->email;
    }

}

$personA = new person('Peter','Walker');
$personB = new customer('Bob','Smith','peter@peter.com');

echo '<h1>Person A</h1>';
echo $personA->firstName. ' ' .$personA->surname.'<br>';
echo '<h1>Person B</h1>';
echo $personB->firstName. ' ' .$personB->surname.'<br>';
echo 'E-mail address: ' . $personB->email;






