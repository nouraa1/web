
<html>
<link rel="stylesheet" type="text/css" href="index.css"/>

	<script language="javascript" type="text/javascript">
    alert("hello to school")
</script>
<head>
<title> sEahors3</title> 
</head>

<body>
<?php 

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db ="school";
  
  $conn = mysqli_connect($host,$user,$pass,$db);
  $r = mysqli_query($conn, "select* from student");  
?>
<form method="post">
<table>
<tr>
<th> ID</th>
<th> Name</th>
</tr>

<?php
while( $row = mysqli_fetch_array($r) )
{
    echo "<tr>";
	echo "<td>".$row['ID']."</td>";
	echo "<td>".$row['Name']."</td>";
	echo "</tr>";	

}

?>

</table>

</form>


</body>
</html>
