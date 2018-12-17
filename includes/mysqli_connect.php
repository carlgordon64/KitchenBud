<?php
$con = mysqli_connect("localhost","Carl","admin","Folio_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql="SELECT Title,Description FROM Projects ORDER BY ID";
$result=mysqli_query($con,$sql);

// Associative array
$row=mysqli_fetch_assoc($result);
//printf ("%s (%s)\n",$row["Title"],$row["Description"]);


while ($row = $result->fetch_assoc()) {
	echo "Title = ".$row["Title"]." ";
echo "Text = ".$row["Description"]." ";
    }



// Free result set
mysqli_free_result($result);

mysqli_close($con);
?> 