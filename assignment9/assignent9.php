<?php 
  // function greet($name){
  //   echo "how are you,$name?";
  // }
  // #get input from the user
  // echo "enter your name: ";
  // $nameEntered = fgets( STDIN);

  // greet($nameEntered)

  function namer(){
    echo "enter your name";
    $enteredName = fgets(STDIN);
    echo "you said your name is $enteredName";
  }
  namer()
?>