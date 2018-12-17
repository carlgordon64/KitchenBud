<?

//Fetch Page 1 Data
$sql29 = "SELECT ID,Page_Name,App_Count,Priority FROM Pages WHERE ID = 1";
$result4 = $conn->query($sql29);
$num_rows = mysqli_num_rows($result4);

if ($result4->num_rows > 0) {
    // output data of each row
    while($row = $result4->fetch_assoc()) {
    $Page1Name = $row['Page_Name'];
 }
}

//Fetch Page 2 Data
$sql28 = "SELECT ID,Page_Name,App_Count,Priority FROM Pages WHERE ID = 2";
$result5 = $conn->query($sql28);
$num_rows = mysqli_num_rows($result5);

if ($result5->num_rows > 0) {
    // output data of each row
    while($row = $result5->fetch_assoc()) {
    $Page2Name = $row['Page_Name'];
 }
}

//Fetch Page 3 Data
$sql27 = "SELECT ID,Page_Name,App_Count,Priority FROM Pages WHERE ID = 3";
$result6 = $conn->query($sql27);
$num_rows = mysqli_num_rows($result6);

if ($result6->num_rows > 0) {
    // output data of each row
    while($row = $result6->fetch_assoc()) {
    $Page3Name = $row['Page_Name'];
 }
}

//Fetch Page 4 Data
$sql26 = "SELECT ID,Page_Name,App_Count,Priority FROM Pages WHERE ID = 4";
$result7 = $conn->query($sql26);
$num_rows = mysqli_num_rows($result7);

if ($result7->num_rows > 0) {
    // output data of each row
    while($row = $result7->fetch_assoc()) {
    $Page4Name = $row['Page_Name'];
 }
}

?>