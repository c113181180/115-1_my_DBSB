<?php 
    if (isset($_POST["Send"])) {
    
    $email = $_POST["Email"];  // 取得郵件地址
    $name = "<a href='email.php?address=";
    $name .= $email."'>".$_POST["Name"]."</a>";

    $messages = nl2br($_POST["Message"]);
    $fp = fopen($file, "a");  // 開啟檔案
    $today = date("Y年m月d日 h:i:s");

    $msg  = "<b>留言時間：</b>".$today."<br/>";
    $msg .= "<b>姓名：</b>".$name."<br/>";   
    $msg .= "<b>留言：</b>".$messages."<br/><hr/>";  
  
    
    
   
    fwrite($fp, $msg);
    fclose($fp);
    }
    ?>