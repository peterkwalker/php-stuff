<?php


// function
function myFunction ($par){

if ($par == 1){
	echo 1;
} else {
	echo 2;
}

}

//$a = myFunction(2);


$current_file_name = basename($_SERVER['PHP_SELF']);
//echo $current_file_name."\n";

//echo 'Current PHP version : ' . phpversion();


function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x == 0)
	      {
		   return true;
		  }
    }
  return false;
   }

$a = IsPrime(3);

if ($a==true)
echo 'This is not a Prime Number.....<br>';
else
echo 'This is a Prime Number..<br>';

// custom class

class myClass {

    const constantVar = 'Your Choices';
	public $fontSize;
	public $fontColour;
	public $title;

	public function __construct($par, $par1, $par2){
			$this->fontSize = $par;
			$this->fontColour = $par1;
			$this->title = $par2;
	}

	public function customPrint(){
		echo $this::constantVar. ' = Font-Size: ' .$this->fontSize .' Font-Colour: '. $this->fontColour .'<br>';
	}


}

$a = new myClass('50px', 'Blue', 'My Title');
echo $a->customPrint();
echo $a->fontSize;





