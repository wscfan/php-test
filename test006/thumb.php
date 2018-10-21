<?php

/*打开图片*/
  // 1. 配置图片路径
  $src = 'pic1.jpg';
  // 2. 获取图片信息
  $info = getimagesize($src);
  // 3. 通过图片编号获取图片类型
  $type = image_type_to_extension($info[2], false);
  // 4. 在内存中建立一个和图片类型一样的图像
  $func = "imagecreatefrom{$type}";
  // 5. 把图片复制到内存中
  $image = $func($src);

/*操作图片*/
  // 1. 在内存中建立一个宽300，高200的真色彩的图片
  $image_thumb = imagecreatetruecolor(150, 100);
  // 2. 将原图复制到新建的真色彩的图片上，并且按照一定比例压缩
  imagecopyresampled($image_thumb, $image, 0, 0, 0, 0, 150, 100, $info[0], $info[1]);
  // 3. 销毁图片
  imagedestroy($image);

/*输出图片*/
  // 把图片输出到浏览器
  header('Content-type:' . $info['mime']);
  $funs = "image{$type}";
  $funs($image_thumb);
  // 保存到硬盘
  $funs($image_thumb, 'thumb_image.' . $type);

/*销毁图片*/
  imagedestroy($image_thumb);