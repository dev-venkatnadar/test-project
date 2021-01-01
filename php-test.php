<?php
    //** Question 1 **
    //Defing and adding all array values
    echo "--QUESTION 1--<br>";
    $age = array(12, 13 ,14, 15, 16, 17, 18, 19, 20, 21, 22, 20);
    $sum = 0;
    $n;
    $count = 0;
    echo "Numbers in array are: <br>";
    for($i=0; $i<count($age); $i++){
        print_r($age[$i]."<br>");
        $sum = $sum + $age[$i];
    }
    echo "Sum of numbers in array is ".$sum."<br>";

    //** Question 2 **
    //Finding the repeated numbers
    echo "--QUESTION 2--<br>";
    for($i=0; $i<count($age); $i++){
        for($j=0; $j<count($age); $j++){
           if($i != $j){
               if($age[$i] == $age[$j]){
                   $n = $age[$i];
                   $count++;
               }
           }
        }
    }

    echo $n. "\n is repeated \n". $count ."\n times";

    //** Question 3 **
    //maximum consecutive 1's in an array of 0's and 1's
    echo "<br>--QUESTION 3--<br>";

    $b = array(0,1,1,1,1,0,0,1,1,);
    $max = 0;
    $one = 0;
    
    for($i=0; $i<count($b); $i++){
        if($b[$i] == 1){
            $one++;
        }
        elseif($b[$i] == 0){
            if($one > 0){
                $temp = $one;
            }
            $one = 0;
        }
    }

    if($temp > $one){
        $max = $temp;
    }
    else{
        $max = $one;
    }
    print_r($b);
    echo "<br> maximum consecutive 1's in an array of 0s and 1s is \n".$max;


    //** Question 4 **
    //Sum of pair values 
    echo "<br>--QUESTION 3--<br>";
    $pair = array(5,5,-5,15,8,2,6,4);
    $value = 10;
    echo "Sum of pairs of values should be \n".$value."<br>";
    print_r($pair);
    echo "<br>The Pairs are: <br>";

    for($i=0; $i<count($pair); $i++){
        for($j=0; $j<count($pair); $j++){
            $sum = $pair[$i] + $pair[$j];
            if($i != $j){
                if($sum == $value){
                    echo "(".$pair[$i].",".$pair[$j].")".",";
                }
            }
        }
    }

    
?>