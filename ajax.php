<?php
$conn = mysqli_connect("localhost","root", "");
mysqli_select_db($conn,"test");

$part = $_GET["part"];
$sql = mysqli_query($conn,"select * from body where bodypart='$part'");

echo "<select id='excer'>";
if($part != ""){
while($row = mysqli_fetch_array($sql))
{
    echo "<option value='".$row["excercise"]."'>".$row["excercise"]."</option>";
}
echo "</select>";
}

?>