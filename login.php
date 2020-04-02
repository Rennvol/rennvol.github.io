<?php 

$username = "Admin";
$password = "Admin";
if($username == $_GET['user'] && $password = $_GET['pass']){
 echo "LOGIN BERHASIL";
}else if($_GET['user'] == empety && $_GET['pass'] == empety) {
echo '<form method="GET">
   <input type="text" name="user">
   <input type="password" name="pass">
   <input type="button" name="submit" value="BAHAYA !!!!!">
</form>';
}else {
 echo "Login Salah";
}

?>
