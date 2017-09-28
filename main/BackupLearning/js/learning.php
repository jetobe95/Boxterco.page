
<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "syrus";
		 

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
	
	
	
	
			

						//while ($fila = mysqli_fetch_array($resultado))

$query = "SELECT * FROM datos2 ORDER BY id_syrus DESC LIMIT 1";
$resultado= mysqli_query($conn,$query);
while($data = mysqli_fetch_array($resultado)) {
    $output[] = $data;
}
echo json_encode($output);

?>