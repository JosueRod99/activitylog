<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=usuarios.xls');

	require_once('conexion.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM activity_log";
	$result=mysqli_query($link, $query);

	$queryUsers="SELECT * FROM winfo";
	$resultUsers=mysqli_query($link, $queryUsers);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>UID</th>
		<th>Date</th>
		<th>Info</th>
		<th>Total</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['UID']; ?></td>
					<td><?php echo $row['DATE']; ?></td>
					<td><?php echo $row['INFO']; ?></td>
					<td><?php echo '=suma('.$row['UID'].'+10)'; ?></td>
				</tr>	

			<?php
		}

	?>
</table>

<table border="1">
	<tr style="background-color:blue;">
		<th>UID</th>
		<th>Name</th>
		<th>Surname</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($resultUsers)) {
			?>
				<tr>
					<td><?php echo $row['UID']; ?></td>
					<td><?php echo $row['NAME']; ?></td>
					<td><?php echo $row['SURNAME']; ?></td>
				</tr>	

			<?php
		}

	?>
</table>