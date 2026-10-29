<head>
    <meta charset="utf-8" />
    <title>8-4-5.php</title>
</head>

<?php
$error = "";
$msg = ""; // 初始變數值
$name ="";
$username="";
$showform = true; 

if (isset($_GET["Reg"])) {
    $name = $_GET["Name"];
    $username = $_GET["username"];
    $pass1 =$_GET["pass1"];
    $pass2= $_GET["pass2"];
    if (empty($username)) {
        $error = "your username is empty<br/>";
    }else{
        if (empty($pass1)){
            $error = "your password is empty<br/>";
        }else{
            if ($pass1 == $pass2){
                $error = "your password is not same<br/>";
            }else{
                $showform = false;
                $msg = "Name:" . $name . "<br/>" ;
                $msg .= "Username:" . $username . "<br/>";
                $msg .="Password:" . $pass1 . "<br/>";
                
            }
        }
    }
}
?>

<?php if ($showform) { // 顯示網頁表單
        ?>
    <form action="8-4-5.php" method="get">
        Name: <input type=text name="Name" /><br />
        ID: <input type=text name="UserName" /><br />
        Password: <input type=password name="Pass1" /><br />
        Password-again: <input type=password name="Pass2" /><br />
        <input type="submit" name="Reg" value="Register User" />
    </form>
    <?php
    } else
        echo $msg;  // 顯示表單處理結果
    ?>

    <?php 
     if ($showform) { // 顯示網頁表單
        require("about me.php");
        echo "W08-EX03" . "<br/>";
        ?>
    <form action="8-4-5.php" method="get">
        Name: <input type=text name="Name" /><br />
        ID: <input type=text name="UserName" /><br />
        Password: <input type=password name="Pass1" /><br />
        Password-again: <input type=password name="Pass2" /><br />
        <input type="submit" name="Reg" value="Register User" />
    </form>
    <?php
    } else
        require("about me.php");
    echo "W08-EX03" . "<br/>";
    echo $msg;  // 顯示表單處理結果
    ?>