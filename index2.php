<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Count</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1 class = "heading">Number Count</h1>
    <?php
        //INITIALIZING AL THE VARIABLES WITH 0 WHEN SESSION STARTS
        session_start();
        if (!isset($_POST['submit1'])) {
            $_SESSION['attnum'] = 0;
        }
        if (!isset($_POST['submit2'])) {
            $_SESSION['attnum1'] = 0;
        }
        if (!isset($_POST['submit3'])){
            $_SESSION['attnum2'] = 0;
        }
    ?>
    
    <form method = "POST">
        <input class = "but" type="submit" name = "submit1" value="Increment by 1">
        <input class = "but" type="submit" name = "submit2" value="Increment by 2">
        <input class = "but" type="submit" name = "submit3" value="Increment by 3">
    </form>
    
    <div class="container1">
        <p class="dig" id = "b1"><?php echo $_SESSION['attnum']++; ?></p>
        <p class="dig" id = "b2">
         <?php
            echo $_SESSION['attnum1'];
            $_SESSION["attnum1"] += 2;
         ?>
        </p>
        <p class="dig" id = "b3">
         <?php
            echo $_SESSION['attnum2'];
            $_SESSION["attnum2"] += 3;
         ?>
        </p>
    </div>    
</body>
</html>