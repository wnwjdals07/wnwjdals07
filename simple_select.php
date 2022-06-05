<?php
$con = mysqli_connect("localhost","wnwjdals07","1234","test");
$sql = "SELECT * FROM tbk";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)){
echo $row['number'].". "."이름 : ".$row['name']."<br>";
echo "메세지 : ".$row['mess']."<br>";
echo "------------------------------------------------- <br>";
}
print "<br><a href='simple.html'>메인 화면으로</a>";
?>