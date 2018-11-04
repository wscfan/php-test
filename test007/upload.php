<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>表单上传</title>
</head>
<body>
  <form action="doAction1.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="Max_FILE_SIZE" value="124100">
    请选择您要上传的文件：
    <input type="file" name="myFile" accept="image/jpeg, image/gif, image/png" /><br>
    <input type="submit" value="上传文件">
  </form>
</body>
</html>