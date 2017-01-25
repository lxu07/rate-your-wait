<?php
$myfile = fopen("newfile.php", "w") or die("Unable to open file!");
$php = '<?php session_start();
$filename = $_SESSION[\'filename\'];
$filesize = $_SESSION[\'filesize\']\n';
fwrite($myfile, $php);
fclose($myfile);
chmod('newfile.php', 0755);
?>