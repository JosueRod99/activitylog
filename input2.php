
<?php
$UID = $_POST['UID'];
$benefit = $_POST['benefit'];
$act = $_POST['ACTIVITY'];
$a_global = $_POST['global'];
$a_done = $_POST['A_DONE'];
$TID = $_POST['type'];

$date_o = $_POST['date_o'] ;
$date_o = "2020-04-04 $date_o";
$date_f = $_POST['date_f'];
$date_f = "2020-04-04 $date_f";



$conection = mysqli_connect("localhost","root","","workers");

$request="INSERT INTO `activity_log`(`UID`, `DATE`, `DATE_FINAL`, `ACTIVITY`, `A_DONE`, `BENEFIT`, `GID`, `TID`) VALUES ($UID, '$date_o', '$date_f', '$act', '$a_done', $benefit, $a_global, $TID)";

$result = mysqli_query($conection,$request);
mysqli_close($conection);

if($result != NULL)
{
	echo "<script>
                alert('Los datos se ingresaron correctamente');
                window.location= 'home_users.php?user=$UID'
    </script>";
}
else 
{
	echo "<script>
                alert('Se ha producido un error, intente nuevamente.');
                window.location= 'home_users.php?user=$UID'
    </script>";
}



?>