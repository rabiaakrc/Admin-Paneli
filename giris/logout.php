<?php
session_start();
ob_start();
session_destroy();
echo "Çýkýþ Yaptýnýz. Ana Sayfaya Yönlendiriliyorsunuz";
header("Refresh: 2; url=index.php");
ob_end_flush();
?>