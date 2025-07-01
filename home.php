<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<body>
    <?php
        echo "<h1>This is Start of PHP!</h1>";
        $num1 = 10;
        $num2 = 20;
        echo "num1 = ".$num1."<br />";
        if($num1>$num2){
            echo "Num1 is greater";
        }else{
            echo "Num2 is greater";
        }
        echo ($num1>$num2)? "Num1 is greate":"Num2 is greater";
        echo $num3??$num2;
    ?>
</body>
</html>