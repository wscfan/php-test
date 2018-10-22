<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>表单上传</title>
</head>
<body>
  <form action="doAction.php" method="post" enctype="multipart/form-data">
    请选择您要上传的文件：
    <input type="file" name="myFile" /><br>
    <input type="submit" value="上传文件">
  </form>
</body>
</html>