<?php
$conn = mysqli_connect("localhost","root","","users");
$res = mysqli_query($conn,"SELECT * FROM userdetails");
echo "<table border=1>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Phone NO.</th>
<th>Email Address</th>
<th>Address</th>
<th>Gender</th>
</tr>
";
while($row = mysqli_fetch_array($res)){
echo '
<tr>
<td>"'.$row["First Name"].'"</td>
<td>"'.$row["Last Name"].'"</td>
<td>"'.$row["Phone NO."].'"</td>
<td>"'.$row["Email Address"].'"</td>
<td>"'.$row["Address"].'"</td>
<td>"'.$row["Gender"].'"</td>
</tr>
';
}
echo "</table>";
?>