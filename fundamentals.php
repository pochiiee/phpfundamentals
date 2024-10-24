<?php

//variables

$name = 'Chrisha';
$gender = 'F';
$age = 20;


echo "Name: $name <br>";
echo "Gneder: $gender <br>";
echo "Age: ". $age.'<br>';


var_dump(98); //used to check datatype

echo '<br>';

//constant


define('Message', 'Hello World'.'<br>');

echo Message;


// if else statement


$num1 = 1;

if($num1 == '1'){ //in this case incorrect since naka string si 1

    echo "Correct <br>";
}else{
    echo "incorrect <br>";
}

    // pag == check lang if parehas value regardless of its datatype
    //pag === chinecheck both datatype and value if same


if($num1 === 1){ //in this case correct since same vallue 1
    echo "Correct <br>";
}else{
    echo "incorrect <br>";
}

//ternary 

$numm = 2;

echo $numm == 2 ? "Correct" : "Incorrect";


echo '<br>';

    //another ex ternary

$a = 10;
$b = 20;

$max = ($a > $b) ? $a : $b;

echo $max;

echo '<br>';
echo 'hi'.'<br>';

// switch statement

$day = 2;

switch($day){

    case 1: 
        echo 'Monday';
        break;

    case 2:
        echo 'Tuesday';
        break;
    
    case 3:
        echo 'Wednesday';
        break;

    default:
        echo 'Invalid Input';

}


// while loop

$iteration = 1;

while($iteration <=5){

    echo $iteration.'<br>';

    $iteration++;
}

//do while loop

$i = 1;

do{
    echo $i.'<br>';

    $i++;
} while($i>=5);


//for loop

for($j = 1; $j >= 5; $j++){

    echo $j.'<br>';

}


$arrayNumbers = [1, 2, 3, 4, 5];

foreach($arrayNumbers as $arrayNumber){

    echo $arrayNumber;

}


//array


    // 1st technique to create an array

$arrayNum = [1, 2, 3];  //=> for change index ex [1 => 1, 2, 3];


echo $arrayNum[0].'<br>'; // output 1
echo $arrayNum[1].'<br>'; // output 2
echo $arrayNum[2].'<br>'; // output 3


    // 2nd technique to create an array


$arrayName = array('Chrisha', 'Ann', 'Dalmacio');


echo $arrayName[0]. '<br>'; //output Chrisha
echo $arrayName[1]. '<br>'; //output Ann

print_r($arrayNum); //used to print the initialization of an array

echo '<br>';


// function 


function showmessage($message){

    echo $message;

}

showmessage('Hello'.'<br>');

    //another ex function

function add($number1, $number2){


    $result = $number1 + $number2;

    return $result;
}


echo 'Result: '.add(3,3);


?>