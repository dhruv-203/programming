<!doctype html>
<html lang="en">
<?php $connect=mysqli_connect("localhost","root","","UserDetails");
    session_start();
    $username=$_SESSION['username'];
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
    if(!mysqli_stmt_bind_param($prep,'s',$username)){
        echo "Failed: "+mysqli_stmt_error($prep);
    }
    if(!mysqli_stmt_execute($prep)){
        echo "Failed: "+mysqli_stmt_error($prep);
    }
    else{
        $res=mysqli_stmt_get_result($prep);
        $value=mysqli_fetch_assoc($res);
    }
    if($_REQUEST['curr_password']==$value['PASS']&&$_REQUEST['new_password']==$_REQUEST['re_password']&&$_REQUEST['new_password']!=""){
        $sql="UPDATE USERS SET PASS=? WHERE USERNAME=?";
        $prep=mysqli_prepare($connect,$sql);
        if(!empty($username)){

        if(!mysqli_stmt_bind_param($prep,'ss',$_REQUEST['new_password'],$username)){
            echo "Failed: "+mysqli_stmt_error($prep);
        }
        if(!mysqli_stmt_execute($prep)){
            echo "Failed: "+mysqli_stmt_error($prep);
        }
        else{
            echo "<h1>Password Changed Successfully</h1>";
            session_unset();
            session_destroy();
        }
        }
        else{
            echo "Your Password is already changed";
        }
    }
    else{
        echo "<h1>Bad Request</h1>";
    }
    
}
?>

<body>
    <p class="h2 fs-1 text-danger">Change Password</p>
    <div class="main container">
        <form action="" method="POST">
            <div class="row mb-3 align-self-center justify-content-center">
                <label for="curr_password" class="text-danger col-sm-2 fs-4 col-form-label">Current Password: </label>
                <div class="col-sm-5">
                    <input type="password" name="curr_password" class="form-control" id="curr_password">
                </div>
            </div>
            <div class="row mb-3 align-self-center justify-content-center">
                <label for="inputPassword3" class="text-danger col-sm-2 fs-4 col-form-label">New Password: </label>
                <div class="col-sm-5">
                    <input type="password" name="new_password" class="form-control" id="newpass">
                </div>
            </div>
            <div class="row mb-3 align-self-center justify-content-center">
                <label for="reenternewpass" class="text-danger col-sm-2 fs-4 col-form-label">Re-Enter New Password: </label>
                <div class="col-sm-5">
                    <input type="text" name="re_password" class="form-control" id="reenternewpass">
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