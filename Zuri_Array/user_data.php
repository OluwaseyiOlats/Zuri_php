<?php
$filename = "./userdata.csv";
$handle = fopen($filename, "a");
fwrite($handle, "name\n");
fwrite($handle, "email\n");
fwrite($handle, "dob\n");
fwrite($handle, "gender\n");
fwrite($handle, "country\n");
fclose($handle);

$file = fopen($filename, "r");
$content =fread($file, filesize($file));
print_r($content);
fclose($file);

?>