<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>訪客留言板</title>
</head>
<body>
<?php
require("abme.php");
echo"W11"."<Hr/>";
?>
<?php

$file = "guesbok.txt";
?>


<form action="guesbok.txt" method="post">
    <table border="1">
        <tr>
            <td>Name: </td>
            <td><input type="text" name="Name" /></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="text" name="Email" /></td>
        </tr>
        <tr>
            <td>Content: </td>
            <td>
                <textarea name="Message" rows="4" cols="30"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="Send" value="Send Message" />
                <input type="reset" name="Reset" value="Reset Fields" />
            </td>
        </tr>
    </table>
</form>

<hr/>

<?php
if (file_exists($file)) {
    readfile($file);
}
?>
</body>
</html>

| <a href="guestbook.php">新增留言</a>
| <a href="showmessage.php">檢視留言</a> |