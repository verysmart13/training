<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8" />
<title>資料庫連接</title>
</head>
<body>
<?php
$link = @mysqli_connect('localhost','verysmart13','rasu26qofo','verysmart13');

if( !$link ){
echo "連接錯誤!<br/>";
exit();
}

else{
echo "連接成功!!<br/>";
}
//mysqli_close($link);
?>
</body>
</html>
