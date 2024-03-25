<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="INDEX.PHP" method="post">
        <label>rADIUS:</label>
        <input type="text" name="radius">
        
        <input type="submit" value="calculate">



    </form> 
</body>
</html>
<?PHP
$radius=$_POST['radius'];
$circumference=null;
$circumference=round(2*pi() * $radius,2);
//AREA 
$area = round(pi()*pow($radius,2),2);
//Volume 
$volume = round(4/3 *pi()*pow($radius,3),2);



//Xuat ket qua
echo "Circumference = {$circumference} cm <br>";
echo "Area = {$area} cm^2 <br>";
echo "Volume = {$volume} cm^3 <br>";
?>
