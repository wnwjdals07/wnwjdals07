<?php
$con = mysqli_connect("localhost","wnwjdals07","1234","test");
$b1_d = $_POST["b1"];
$sql = "DELETE FROM tbk WHERE number=$b1_d";
mysqli_query($con, $sql); $sql = "SELECT * FROM tbk";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)) {
	echo $row['number'].". ";
	echo $row['name']." ";
	echo $row['mess']."<br>";
}
print "<br><a href='simple.html'>메인 화면으로</a>";
?>