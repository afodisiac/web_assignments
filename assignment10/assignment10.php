<!-- During the execution of the function body, if there is any change in the value of any of the formal arguments, 
it is not reflected in the actual arguments. -->
<?php  
   function  change_name($nm) {
      echo "Initially the name is $nm \n";
      $nm = $nm."_new";
      echo "This function changes the name to $nm \n";
   }

   $name = "afod";
   echo "My name is $name \n";
   change_name($name);
   echo "My name is still $name \n";
?>

<?php
   function addFunction($num1, $num2) {
      $sum = $num1 + $num2;
      return $sum;
   }
   $x = 10;
   $y = 20;
   $num = addFunction($x, $y);
   echo "Sum of the two numbers is : $num";
?>    

<!-- Function parameters are a comma-separated list of expressions inside the parenthesis in front of the function
 name while defining a function. -->
<?php
   function addition($first, $second) {
      $result = $first+$second;
      echo "First number: $first \n";
      echo "Second number: $second \n"; 
      echo "Addition: $result \n";
   }

   addition(10, 20);

   $x=100;
   $y=200;
   addition($x, $y);
?>

<!-- returning values-->
<?php
   function additio($first, $second) {
      $result = $first+$second;
      return $result;
   }

   $x=10;
   $y=20;
   $z = addition($x, $y);
   echo "First number: $x Second number: $y Addition: $z". PHP_EOL;
?>