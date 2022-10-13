
<!doctype html>
<html lang="en">
<?php session_start(); ?>

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
if (isset($_REQUEST['submit'])) {
    $_SESSION['otp'] = rand(100000, 999999);
    $_SESSION['email'] = $_REQUEST['email'];
    header('Location: sendmail1.php');
} ?>

<body>
    <p class="h2 fs-1 text-danger">FOREGT PASSWORD</p>
    <div class="main container">
        <form action="" method="post">
            <div class="row mb-5 align-self-center justify-content-center">
                <label for="inputEmail3" class="text-danger col-sm-5 fs-4 col-form-label">Enter Registered Email: </label>
                <div class="col-sm-5">
                    <input type="email" name="email" class="form-control" id="inputEmail3"><br>
                </div>
            </div>
            <div class="subcon justify-content-center col-12">
                <button type="submit" name='submit' value="submit" class="btn btn-danger btn-lg">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>