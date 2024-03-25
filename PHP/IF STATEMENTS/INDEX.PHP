<?PHP 
$age=15;
if ($age>=18){
    echo "You may enter this site";
}elseif($age==0){
    echo "you were born";
}
elseif($age<=0){
    echo "that wasn't a valid age";
}
else 
{

    echo "You must be 18+ to enter";
}


?>