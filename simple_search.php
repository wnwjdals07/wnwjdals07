<?php
$con = mysqli_connect("localhost","wnwjdals07","1234","test");
$c1_d = $_POST["c1"];
$sql = "SELECT * FROM tbk WHERE mess like '%$c1_d%'";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)) {
	echo $row['number'].". ";
	echo $row['name']."<br>";
	echo $row['mess'];
}
print "<br><a href='simple.html'>메인 화면으로</a>";
?>