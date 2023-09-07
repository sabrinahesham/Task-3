 <?php

 //Q1.

 $counter=1;

 while ( $counter <=10) {
    
    echo $counter; 
    
    // echo(rtrim(chunk_split($counter, 1, '-'), "-"));  ليه لما استخدمت ديه مرضيتش تشتغل ؟؟؟؟
    $counter++ ;

     if ( $counter <= 10) echo "-";
    
 }

 
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";

 //Q2.


  for ($a=1; $a <=50 ; $a++){
      if($a%3==0 && $a%5==0 ){ 
        echo "fizzBuzz";
      }
      else if ($a%3 ==0){
        echo "fizz";
      }
      else if ($a%5==0 ){
        echo"buzz";
      } else{ 
        echo $a ;
      }
      echo "<br>";
  }
  
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";


 //Q3.

  $total=0;
  for ($i=0; $i<=30 ; $i++ ) {
    $total += $i ;
  }
  echo "The sum of the numbers 0 to 30 is $total";

  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";


  //Q4.

$num=4;
$factorial=1;
 for ($j=1; $j<=$num ; $j++ ){
    $factorial *=$j ;
 }
 echo " the factorial of $num is $factorial";

 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";

 //Q5.
  $k=1;
  echo " the odd numbers is"; 

  while ( $k<=15 ) {
    if ( $k%2!==0) { 
        echo " $k ";
    } 
    $k++;
  }

  echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";

//Q6.

$e=1;
echo " the even numbers is"; 

while ( $e<=15 ) {
  if ( $e%2==0) { 
      echo " $e ";
  } 
  $e++;
}
echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>"; 


 //Q7.


$z=1;
do {
    if ( $z%3==0){
        echo " $z"; 
    }
    
    $z++; 
} while ( $z<=100);

echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>"; 


//Q8.


$number1=7;
$number2=3;
$total=0;
$operation= "modulus";

if ( $operation =="submission"){
    $total= $number1 + $number2;
    echo " the total of submission is $total";
} else if ( $operation == "subtraction") {
    $total= $number1 - $number2;
    echo " the total of subtraction is $total " ;
} else if ( $operation == "multiplication") {
    $total= $number1 *$number2;
    echo " the total of multiplication is $total";
} else if ( $operation == "division") {
    $total= $number1 /$number2;
    echo " the total of division is $total";
}else if ( $operation == "power") {
    $total= $number1 ** $number2;
    echo " the total of power is $total";
} else if ( $operation == "modulus") {
    $total= $number1 % $number2;
    echo " the total of modulus is $total";
} else {
    echo "i donnot know this operation";
} 





