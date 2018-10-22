<?php

print_r($_FILES);
$filename = $_FILES['myFile']['name'];
$type = $_FILES['myFile']['type'];
$tmp_name = $_FILES['myFile']['tmp_name'];
$size = $_FILES['myFile']['size'];
$error = $_FILES['myFile']['error'];

// 将服务器上的临时文件移动指定目录下
// move_uploaded_file($tmp_name, "uploads/" . $filename);
copy($tmp_name, "uploads/" . $filename);