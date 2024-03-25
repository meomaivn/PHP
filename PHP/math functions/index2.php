<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>X:</label>
        <input type="text" name="x">
        <label>Y:</label>
        <input type="text" name="y">
        <label>Z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">



    </form>
</body>
</html>
<?php 
//gán giá trị x theo giá trị mình nhập
$x=$_POST['x'];
$y=$_POST['y'];
$z=$_POST['z'];

$total=0;
$total=abs($x);
//Round: làm tròn lên nghĩa 5.5 > 6
$total2=round($x);
//Floor : hàm floor hàm tròn xuống
$total3=floor($x);
//Ceil: hàm ceil hàm tròn lên

$total4=ceil($x);

//hàm POW 
$totalPow=pow($x,$y);
//hàm sqrt 
$totalSQRT=sqrt($x);

//hàm MAX
$totalMAX=max($x,$y,$z);
//hàm PI () >PI =3.14
$toalPI=pi();
//hàm rand() xuất ngẫu nhiên các con số
$totalRand=rand();

//echo $total;
//Ex:
 //thêm . cặp dấu "" đế xuất thông tin k bị lỗi
//echo $total."<br>";
//echo "<br>"
echo $total;
echo "<br>";
echo $total2;
echo "<br>";
echo $total3;

echo "<br>";
echo $total4;
echo "<br>";
echo $totalPow."<br>";
echo $totalSQRT;
echo "<br>";
echo $totalMAX;
echo "<br>";
echo $toalPI;
echo "<br>";
echo $totalRand;

?>
