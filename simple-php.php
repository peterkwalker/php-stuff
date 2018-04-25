<?php

$cars = array('BMW','Merc','Honda');

echo $cars[0];

echo '<br>';

foreach ($cars as $car) {
	echo $car .'<br>';
}

$models = array('make' => 'Toyota', 'model' => 'supra', 'color' => 'black');
echo '<br>';
echo $models['make'];
echo '<br>';
echo '<br>';
foreach ($models as $key => $value) {
	echo strtoupper($key).' '.$value.'<br>';
}

echo '<br>';
echo '<br>';

for($i = 0;$i <= 10; $i++){
	echo 'For Number ' .$i. '<br>';
}
echo '<br>';
echo '<br>';

$i = 0;
while($i <=10){
echo 'While Number ' .$i. '<br>';
$i++;
}
echo '<br>';
echo '<br>';

// functions
function myFunction($num1, $num2){
		return $num1 + $num2;
}
echo myFunction(4,8);
echo '<br>';
echo '<br>';

// str replace
$phrase = 'I like apples';
$phrase = str_replace('apples', 'oranges', $phrase);
echo strtoupper($phrase);
echo '<br>';
echo '<br>';

//implode
$name = array('Bob','Peter','Mike','Andy');
//print_r($name);
$nameString = implode('<br>', $name);
echo $nameString;

//explode
$carString = 'BMW,Toyota,Ford,Rolls Royce';
$carArray = explode(',',$carString);
sort($carArray);
print_r($carArray);
echo count($carArray);

echo '<br>';
echo '<br>';

// case
$x = 2;
switch ($x) {
	case 1;
		echo $x .' is 1';
		break;
	case 2;
		echo $x .' is 2';
		break;
	case 3;
		echo $x .' is 3';
		break;
	case 4;
		echo $x .' is 4';
		break;
	case 5;
		echo $x .' is 5';
		break;
}
echo '<br>';
echo '<br>';

//regular expressions
if (preg_match("/[a-z]/", "Hello World", $matches)){
	echo "Match was found <br>";
	echo $matches[0];
	print_r($matches);
}
echo '<br>';
echo '<br>';


// oop
class car {
    private $make;
	public $model;

	public function __construct($par,$par1) {
	$this->make = $par;
	$this->model = $par1;
    }

    public function getMake(){
    	return $this->make;
    }
    public function getModel(){
    	return $this->model;
    }
    public function setMake($par1){
    	$this->make = $par1;
    }

}

$bmw = new car('BMW','520');
$bmw->setMake('Mercedes');
echo $bmw->getMake() .' '. $bmw->getModel() .'<br>';
echo $bmw->model;
echo '<br>';
echo '<br>';


//prime number
function isPrimeNew($n){
	for ($x=2; $x<$n;$x++){
		if ($n %$x==0){
			return 0;
		}
	}
	return 1;
}

$a = isPrimeNew(3);
if ($a ==0){
	echo "No";
} else {
	echo "yes";
}





















