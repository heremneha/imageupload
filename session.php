<?php
session_start();
?>
<!DOCTYPE>
<html>
<body>
<?php
$_SESSION["favcolor"]="green";
$_SESSION["favanimal"]="cat";
 echo "favourate colour is" .$_SESSION["favcolor"];
 ?>
 </body>
 </html>