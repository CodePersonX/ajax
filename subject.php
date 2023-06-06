<?php
$sid=$_GET["code"];
$conn = new mysqli("localhost", "root", "", "data");
$q = "SELECT * from subjected WHERE id = '$sid'";
$records = $conn->query($q);
echo "<select name='sub'>";
while($row=$records->fetch_assoc()){
$id=$row["id"];
$name=$row["name"];
echo "<option value='$id'>$name</option>";
}
echo "</select>";
?>