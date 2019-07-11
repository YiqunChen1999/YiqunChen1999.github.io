
<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("https://raw.githubusercontent.com/YiqunChen1999/YiqunChen1999.github.io/master/webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>

</body>
</html>
