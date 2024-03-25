<?php 

// Logical operators combine conditional statements 
// if(!condition1)
// && = True if both conditions are true
// ||  = True if at least one condition is true
// ! = True if false. False if true.
$temp = 35;
if($temp>=0 &&  $temp <=30)
{
    echo "the weather is good. <br>";
}
else{
    echo "the weather is bad. <br>";
}


$temp2=15 ;
$cloudy = true;
if($temp2 <0 || $temp2 >30 ){
    echo "The weather is bad. <br>";

}
else {
    echo "the weather is good. <br>";
}

if($cloudy){

    echo "it is a cloudy. <br>";
}else{
    echo "it is sunny .<br>";
}
?>