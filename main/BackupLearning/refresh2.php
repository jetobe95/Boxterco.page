
<!doctype html>
<html>
<head>

<meta http-equiv="refresh" content="10">
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "syrus";
		 

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
	
	
	
	
			$query = "SELECT * FROM datos2 ORDER BY id_syrus DESC LIMIT 1";
						$resultado= mysqli_query($conn,$query);

						while ($fila = mysqli_fetch_array($resultado))
						{
						?>
		       
		        
		           
               <?php echo $fila ['Longitud'] ?>
		        
		        
							<?php
							}
							?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


	

