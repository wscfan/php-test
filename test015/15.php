<?php
$h = curl_init();
curl_setopt($h, CURLOPT_URL, 'http://localhost/php-test/test015/ze.php');
curl_setopt($h, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($h, CURLOPT_HEADER, 0);

$i = curl_exec($h);

curl_close($h);
echo $i;