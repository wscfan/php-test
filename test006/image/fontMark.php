<?php

/*打开图片*/
// 1. 配置图片路径
$src = 'pic1.jpg';
// 2. 获取图片信息
$info = getimagesize($src);
// 3. 通过图片的编号来获取图片的类型
$type = image_type_to_extension($info[2], false);
// 4. 在内存中创建一个和我们图片类型一样的图片
$fun = "imagecreatefrom{$type}";
$image = $fun($src);

/*操作图片*/
// 1. 设置字体的路径
$font = 'wryh.ttf';
// 2. 填写水印内容
$content = '您好， 慕课';
// 3. 设置字体的颜色和透明度
$col = imagecolorallocatealpha($image, 255, 255, 255, 50);
// 4. 写入文字
imagettftext($image, 20, 0, 20, 30, $col, $font, $content);

/*输出图片*/
// 浏览器输出
header('Content-type:' . $info['mime']);
$func = "image{$type}";
$func($image);
// 保存图片
$func($image, 'newimage.' . $type);

/*销毁图片*/
imagedestroy($image);