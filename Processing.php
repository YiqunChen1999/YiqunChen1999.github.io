<html>
<header>
<body>
<?php
$myfile = fopen("license.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("license.txt"));
fclose($myfile);
?> 
</body>
</header>
</html>
