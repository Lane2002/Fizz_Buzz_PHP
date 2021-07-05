<?php
    // while loop: 
    // $i = 1;
    // while($i < 101){
    //     if($i % 3 === 0 && $i % 5 === 0){
    //         echo "FizzBuzz\n"; 
    //     }elseif($i % 3 === 0){
    //         echo "Fizz\n"; 
    //     }elseif($i % 5 === 0){
    //         echo "Buzz"; 
    //     }else{
    //         echo "$i\n";
    //     }
    //     $i++;
    // }
    

//for and foreach: 
    $output = []; 

    for($i=1; $i<101; $i++){
        if($i % 3 === 0 && $i % 5 === 0){
            array_push($output, "FizzBuzz"); 
        }elseif($i % 3 === 0){
            array_push($output, "Fizz");
        }elseif($i % 5 === 0){
            array_push($output, "Buzz");
        }else{
            array_push($output, "$i");
        }
    }

    // foreach($output as $item){
    //     echo "$item\n";
    // }


    //Break and continue: 
    foreach($output as $item){
        if($item === "Fizz"){
            continue;
        }elseif($item === "FizzBuzz"){
            echo "$item\n";
        break;
        }
        echo "$item\n";
    }