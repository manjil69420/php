<?php
// function hello(){
//     echo"HELLO BCA 4th.";

// }
// hello();
// //function with parameters
// function hello_user($name)
// {
//     echo("Hello $name");
// }
// $user="Ram";
// hello_user($user);
// function add($a,$b =4)
// {
//     echo($a+$b);

// }
// add(2);
// function div($a,$b)
// {
//     echo $a/$b;
// }
// div(b:1,a:5);
// function hello_na($name,$age){
//     echo "Hello $name your age is $age";
// }
// hello_na(age:20,name:"Ram");
// //function with return statement
function can_vote($age){
    if($age>=18){
        return true;

    }
    else{
     return false;
    }
}
if(can_vote(19)){
    echo"Welcome to booth";
}
if(can_vote(19)){
    echo"Get your nails painted";
}
?>