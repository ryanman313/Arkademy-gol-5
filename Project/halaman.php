<?php  
//halaman awal
if(isset($_GET['masuk'])){ 
include'database.php';
}
if(isset($_GET['proses-masuk'])){ 
include'process-sign-in.php';
}
?>