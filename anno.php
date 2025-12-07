<?php
$greet = function($name){
    return"Hello $name";
};
$res = $greet("ram");
echo $res;
$prefix="Mr. ";
$formatName=function($name)use($prefix){
    return $prefix.$name;
};
echo $formatName("Ram");
?>