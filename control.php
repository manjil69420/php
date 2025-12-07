<?php
$age=18;
          //nested if
// if($age<18){
//     echo"You can't vote";
//     exit();
// }
// else{
// //     // if($age==18){
// //   echo"Welcome New Voter"  
// // }
//    echo"You can vote";
// }
             //if-else-if
// if($age>80){
//     echo"Welcome senior citizen to voting booth";

// }else if($age>18){
//     echo"Hello voter, Welcome to voting booth";

// }
// else if($age==18){
//     echo"Hello New Voter";
// }
// else{
//     echo"Sorry,You can't vote";
// }
$day=8;
switch($day){
    case 1:
        echo"Sunday";
        break;
    case 2:
        echo"Monday";
        break;
    case 3:
        echo"Tuesday";
        break;
    case 4:
        echo"Wednesday";
        break;              
    case 5:
        echo"Thursday";
        break; 
    case 6:
        echo"Friday";
        break;
    case 7:
        echo"Saturday";
        break;
        default:
        echo"Provided date is out of bounds";
}

switch($day){
    case 1:
    case 2:
    case 3:
        echo"<br>CLZ LAGXA";
        break;
        default:
        echo"<br>CLZ XUTTI";
}


?>