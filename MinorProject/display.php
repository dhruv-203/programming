<?php 
require "connection.php";
$sql = 'SELECT * FROM Images';
$res = mysqli_query($conn,$sql);
$data=mysqli_fetch_all($res);
$addr = array();

for($i=0;$i<count($data);$i++){
array_push($addr,$data[$i][1]);
}
echo "<div style='height:100%; width:100%;' >";
for ($i=0; $i < count($addr); $i++){ 
    echo "<div class='card'><a href='".$data[$i][1]."' download ><img src='".$data[$i][1]."' alt='png' height='100%' width='100%'></a></div>";
}
echo "</div>";
?>