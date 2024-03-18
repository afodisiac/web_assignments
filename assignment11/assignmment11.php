<?php
    echo "enter your name";
    $name = fgets(STDIN);
    echo "your name is $name";
    function age(){
        echo "how old are you";
        $age= fgets(STDIN);
        return $age;
        // echo "your age is: $age";
    };
    age();
    function age_next_year(){
        $current_age = age();
        $newage= $current_age+1;
        // $newage = $nowage+1;
        echo "you will be $newage next year";
    };
    age_next_year();
?>