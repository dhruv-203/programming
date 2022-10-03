<!doctype html>
<html lang="en">
<?php $connect=mysqli_connect("localhost","root","","UserDetails");
    $name_err="";
    $pass_err="";
    session_start();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="count.js"></script>
</head>
<style>
    body,
    html {
        height: 100%;
        width: 100%;
    }

    .main {
        position: relative;
        top: 32%;
        height: 50%;
        width: 60%;
    }

    form {
        height: 100%;
        width: 100%;
    }

    p {
        position: relative;
        left: 44%;
        top: 26%;
    }

    .subcon {
        position: relative;
        top: 10%;
        display: flex;
        justify-content: center;
    }
</style>
<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
    $sql="SELECT PASS FROM USERS WHERE USERNAME=?";
    $prep=mysqli_prepare($connect,$sql);
    if(!mysqli_stmt_bind_param($prep,'s',$_REQUEST['username'])){
        echo "Failed: "+mysqli_stmt_error($prep);
    }
    if(!mysqli_stmt_execute($prep)){
        echo "Failed: "+mysqli_stmt_error($prep);
    }
    else{
        $res=mysqli_stmt_get_result($prep);
        $value=mysqli_fetch_assoc($res);
    }
    if($_REQUEST['password']==$value['PASS']){
        echo "Successful<br>";
       
    }
    else{
        echo mysqli_error($connect);
        echo "unsuccessful";
    }
}
?>

<body>
    <p class="h2 fs-1 text-danger" id="count" ></p>
    <p class="h2 fs-1 text-danger">SIGN-IN HERE</p>
    <div class="main container">
        <form action="" method="POST">
            <div class="row mb-3 align-self-center justify-content-center">
                <label for="inputEmail3" class="text-danger col-sm-2 fs-4 col-form-label">Username</label>
                <div class="col-sm-5">
                    <input type="text" name="username" class="form-control" id="inputEmail3"><span class="error">         <?php echo"$name_err";?></span><br>
                </div>
            </div>
            <div class="row mb-3 align-self-center justify-content-center">
                <label for="inputPassword3" class="text-danger col-sm-2 fs-4 col-form-label">Password</label>
                <div class="col-sm-5">
                    <input type="password" name="password" class="form-control" id="inputPassword3"><span class="error">           <?php echo"$pass_err";?></span><br>
                </div>
            </div>
            <div class="subcon justify-content-center col-12">
                <button type="submit" class="btn btn-danger btn-lg">Sign in</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>