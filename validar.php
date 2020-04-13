
<?php
$user = $_POST['username'];
$pass = $_POST['pass'];


//conectar a la base de datos
$conection = mysqli_connect("localhost","root","","workers");
$request = "SELECT * FROM Registry WHERE Username='$user' and Password='$pass'";
$result = mysqli_query($conection,$request);

$check = mysqli_num_rows($result);

if ($check>0){
	
	$resu = mysqli_query($conection,"SELECT `UID` FROM `registry` WHERE Username = '$user'");
	$row = mysqli_fetch_array($resu);
	$UID = $row['UID'];
	if($user == "Master")
		header("location:Users/home_master.php?user=$UID") ;
	else
	header("location:Users/home_users.php?user=$UID") ;
}
else {	echo "<script>
                alert('Datos incorrectos, favor de verificar.');
                window.location= '../index.html'
    </script>";}

mysqli_free_result($result);
mysqli_close($conection);


?>
