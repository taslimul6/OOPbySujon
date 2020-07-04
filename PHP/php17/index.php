<?php


$a= "ami";

function all(){
    echo $GLOBALS["a"];
    

}

all();
echo $a;






function joll(){
    global $ab;

     $ab= "ami joll";
    

}

joll();
echo $ab;









?>