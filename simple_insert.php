<?php
    $con = mysqli_connect("localhost","wnwjdals07","1234","test");
    $name = $_POST['a1'];
    $name = addslashes($name);
    $mess = $_POST['a2'];
    $mess = addslashes($mess); $sql = "insert into tbk (
    name,
    mess
)"; $sql = $sql. "values (
'$name',
'$mess'
)";
if($con
->query($sql)){
echo '<script>alert("success inserting")</script>';
}else{
echo '<script>alert("fail to insert sql")</script>';
}
mysqli_close($mysqli);
?>
