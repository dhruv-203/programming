text/x-phpname: file.php<br>type: application/x-php<br>tmp_name: /opt/lampp/temp/phpdATvGy<br>error: 0<br>size: 1076<br><?php 
if(($_SERVER['REQUEST_METHOD']=="POST")&&($_FILES['files']['size']<4000000)){
   $arr = array("image/png","image/jpg","image/jpeg","application/pdf","text/x-php");
//    echo mime_content_type($_FILES['files']['tmp_name']);
    if(in_array(mime_content_type($_FILES['files']['tmp_name']),$arr)){
        $name=$_FILES['files']['name'];
        $add = $_FILES['files']['tmp_name'];
        move_uploaded_file($add,"uploads/$name");
        foreach ($_FILES['files'] as $key => $value) {
            echo $key.": ".$value."<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Upload Your Files here</h1>
        <label for="file">Upload Here: </label>
        <input type="file" name="files" id="file">
        <input type="submit" value="submit">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Upload Your Files here</h1>
        <label for="file">Upload Here: </label>
        <input type="file" name="files" id="file">
        <input type="submit" value="submit">
    </form>
    
</body>

</html>