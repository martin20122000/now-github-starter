<?php 

	$conexion=mysqli_connect('localhost','root','admin123','libreta');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>
	<input id="name"></input>
<script>
	var name=document.getElementbyId("name")
	var name1="martin"
</script>
<br>

	<table border="1" >
		<tr>
			<td>nombre</td>
			<td>nota1</td>
			<td>nota2</td>
			<td>nota3</td>	
		</tr>
<?php

$a=$_POST['mail'];
$pass=$_POST['pass'];

?> 
<?php




?>		
<?php 

		$sql="SELECT * from notas1 Where nombre IN('".$a."')";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['nota1'] ?></td>
			<td><?php echo $mostrar['nota2'] ?></td>
			<td><?php echo $mostrar['nota3'] ?></td>

	

		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>