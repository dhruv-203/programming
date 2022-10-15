<?php 
    require "connection.php";
   $arr = array("image/png","image/jpg","image/jpeg","application/pdf","image/heif");
   $name=$_FILES['files']['name'];
   $add = $_FILES['files']['tmp_name'];
//    echo mime_content_type($_FILES['files']['tmp_name']);
    if(in_array(mime_content_type($_FILES['files']['tmp_name']),$arr) && !file_exists($_FILES['files']['name'])){
        move_uploaded_file($add,"uploads/$name");
        $sql="INSERT INTO Images values(\"$name\",\"uploads/$name\")";
        if(!mysqli_query($conn,$sql)){
            echo mysqli_error($conn);
        }
        else{
            header('Location: http://localhost/programming/MinorProject/home.html');
        }
    }

?>
