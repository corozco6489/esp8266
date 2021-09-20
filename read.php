<!DOCTYPE html>
<html>
	<head>
		<style>
			table {
				border-collapse: collapse;
				width: 80%;
				color: #45f542;
				font-family: monospace;
				font-size: 20px;
				text-align: center;
				margin: auto;
				border-radius: 25px;

			} 
			th {
				background-color: #45f542;
				color: white;
			}
			tr:nth-child(even) {background-color: #f2f2f2}
		</style>
	</head>
	<?php
		//Creates new record as per request
		//Connect to database
		$hostname = "localhost";		//example = localhost or 192.168.0.0
		$username = "carlos";		//example = root
		$password = "orozco";	
		$dbname = "sensores1";
		// Create connection
		$conn = mysqli_connect($hostname, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed !!!");
		} 
	?>
	<body>

	<div style="text-align: center;">

	<table>
			<tr>
				<th>id</th> 
				<th>Sensor1</th> 
				<th>Sensor2</th>
				<th>Sensor3</th>
				<th>Fecha</th>
				<th>Tiempo</th>
			</tr>	
	</div>
		
			<?php
				$table = mysqli_query($conn, "SELECT id, temperatura, voltaje, humedad, Date, Time FROM datos"); //nodemcu_ldr_table = Youre_table_name
				while($row = mysqli_fetch_array($table))
				{
			?>
			<tr>
				<td><?php echo $row["id"]; ?></td>
				<td><?php echo $row["temperatura"]; ?></td>
				<td><?php echo $row["voltaje"]; ?></td>
				<td><?php echo $row["humedad"]; ?></td>
				<td><?php echo $row["Date"]; ?></td>
				<td><?php echo $row["Time"]; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>