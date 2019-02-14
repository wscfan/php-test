<?php

$h = curl_init();
curl_setopt($h, CURLOPT_URL, 'http://localhost/php-test/test015/post.php');
curl_setopt($h, CURLOPT_POST, 1);
curl_setopt($h, CURLOPT_POSTFIELDS, 'id=2&name=admin');

$i = curl_exec($h);

curl_close($h);

var_dump($i);
