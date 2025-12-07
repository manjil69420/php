<?php
function hello(string $name,int $age){
    echo"Hello $name your age is $age"."<br>";
}
hello("Ram",10);
// enforcing on return data types
function hi(string $name,int $age){
    return"Hello $name your age is $age";
}
echo hi("shyam",24);
function hey(string $name,int $age){
    return[$name,$age];
}
print_r(hey("shyam",24));
?>