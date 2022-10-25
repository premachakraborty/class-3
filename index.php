<?php

$one= 80;
$two= 30;
$three= 98;

if ($one>$two) {

	echo $one. " is a greater number";
}else{

	echo $two. " is a greater number";

}
echo "<br>";

if ($one>$two && $one>$three) {

	 	echo " 80 is a greater number";
} elseif ($two>$one && $two>$three) {
	echo " 30 is a greater number";
} else{
	echo "98 is a greater number";
}

echo "<br>";

function greaterNumber($Number1,$Number2,$Number3){

	$one= $Number1;
    $two= $Number2;
     $three= $Number3;

	if ($one>$two && $one>$three) {

	 	echo " 45 is a greater number";
} elseif ($two>$one && $two>$three) {
	echo " 100 is a greater number";
} else{
	echo "74 is a greater number";
}

}
 greaterNumber(45,100,74);

 echo "<br>";
  $User_name= "Prema";
  if (ctype_alpha($User_name) == 1) {

  	echo "Welcome";

  }else{
  	echo "Sorry";
  }
echo "<br>";

$age= 66;
 echo is_numeric($age);

 echo "<br>";
 $num= 10;
  if ($num>0) {
  	echo "10 is a positive number";
  }elseif ($num<0) {
  	echo "10 is a negative number";
  }else{
  	echo "10 is a nutral number";
  }
echo "<br>";

$num2=51;

if ($num2%2 ==0) {
	echo "$num2 is a positive even number";
}else
echo "$num2 is a positive odd number";

echo "<br>";

$usermail= "prema@gmail.com";
$password= 1245;

if ($usermail== "prema@gmail.com" && $password== 1245) {
	echo "Login Sucessfull";
	
}else{
	echo "Invalid Credentials";
}

echo "<br>";




function getpay($amount1=0 ,$year2= 1, $interest3= 10){
	$amount= $amount1;
$year=$year2;
$interest= $interest3;



$totalinterest= ($interest/100)*$year;


$totalinterestmoney = $amount* $totalinterest;
$totalpayable= $amount + $totalinterestmoney;
$permonthpayable=$totalpayable/($year*12);
echo "Total Pay Per Month : " .round($permonthpayable);

}

getpay( 10000,2,5);


echo "<br>";

$name= ['Prema Chakraborty', 'Web Designer', ' Graphic Designer', '20'];
echo "<pre>";
var_dump($name[2]);
echo "</pre>";
?>