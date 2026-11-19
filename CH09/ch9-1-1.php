<?php
require "about_me.php";
echo "W11 Ex01<br/>";
echo "<HR>";

$file = basename($_SERVER["PHP_SELF"], ".php");
$path = realpath($file . ".php"); // 取得檔案真實路徑
echo "real path: $path <BR/>";

$part = pathinfo(($path)); // 取得路徑資訊
echo "path: " . $part["dirname"] . "<BR/>";
echo "filename: " . $part["basename"] . "<BR/>";
echo "extension: " . $part["extension"] . "<BR/>";

if(file_exists($file . ".php")){
   echo"file: $file.php exists <BR/>";
}else{
   echo"file: $file.php does not exist <BR/>";
}

if(!copy($file . ".php", $file . ".bak")){
   echo"file: $file.php copy to bak failed <BR/>";
}else{
   echo"file: $file.php copy to bak successful <BR/>";
}

rename($file . ".bak", "test.txt"); // 檔案更名
$file="test.txt";

unlink($file);  // 刪除檔案
echo "File $file has been deleted <BR/>";
