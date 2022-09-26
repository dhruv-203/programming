<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;

        }

        * {
            margin: 0;
            padding: 0;
        }

        .output {
            position: absolute;
            top: 30%;
            left: 11%;
        }

        .title {
            position: relative;
            height: 10%;
            text-align: center;
            width: 100%;
            font-size: 25px;
            top: 43px;
            /* margin-top: 10px; */
            font-family: monospace;
            font-weight: 700;
        }

        .main {
            height: 67%;
            position: absolute;
            width: 31%;
            padding: 20px;
            left: 35%;
            top: 15%;
            font-size: 14px;
            border: 1px black solid;
        }

        form {
            width: 100%;
            height: 85%;
            margin-top: 41px;
        }

        table {
            width: 100%;
            height: 100%;
        }

        td,
        tr {
            padding: 0;
        }

        tbody {

            width: 100%;
            height: 100%;
        }

        .error {
            color: red;
        }

        .submit {
            width: 130px;
            border-radius: 100px;
            height: 50px;
            font-size: 20px;
            background: none;
            background-color: #ff4f71;
            border: 1px solid black;
            position: relative;
            left: 40%;
        }

        label {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php
    $name_err = $pass_err = $mail_err = $tel_err = "";
    $name = $mail = $pass = $tel = "";
    $success = "";
    $bol = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_REQUEST["Username"])) {
            $name_err = "* Username cannot be Empty";
            $bol = true;
        } else {
            if (preg_match("/^[A-Za-z][A-Za-z0-9_]{7,29}$/", $_REQUEST["Username"])) {
                $name = $_REQUEST["Username"];
            } else {
                $name_err = "* Username should start with an alphabet. All other characters can be alphabets, numbers or an underscore";
                $bol = true;
            }
        }
        if (empty($_REQUEST["password"])) {
            $pass_err = "* Password cannot be Empty";
            $bol = true;
        } else {
            if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/", $_REQUEST["password"])) {
                $pass_err = "* Min 1 uppercase letter, Min 1 lowercase letter, Min 1 special character, Min 1 number, Min 8 characters, Max 30 characters.";
                $bol = true;
            } {
                $pass = $_REQUEST['password'];
            }
        }
        if (empty($_REQUEST["number"])) {
            $tel_err = "* Phone Number cannot be Empty";
            $bol = true;
        } else {
            if (preg_match("/^[0-9]{10}$/", $_REQUEST["number"])) {
                $tel = $_REQUEST["number"];
            } else {
                $tel_err = "* Phone number can only have 10 digits";
                $bol = true;
            }
        }
        if (empty($_REQUEST["email"])) {
            $mail_err = "* Email cannot be Empty";
            $bol = true;
        } else {
            if (filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)) {
                $mail = $_REQUEST["email"];
                $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
            } else {
                $mail_err = "* Not a Valid Email";
                $bol = true;
            }
        }
        if (!$bol) {
            // $connect = mysqli_connect("localhost", "root", "");
            // mysqli_query($connect, "CREATE DATABASE UserDetails");
            // mysqli_select_db($connect, "UserDetails");
            // $query = "CREATE TABLE USERS(`USERNAME` VARCHAR(30) PRIMARY KEY, `PASS` VARCHAR(31), `PHONENO` NUMERIC(11),`EMAIL_ID` VARCHAR(80))";
            // if (!mysqli_query($connect, $query)) {
                //     echo mysqli_error($connect);
                // }
            $connect = mysqli_connect("localhost", "root", "","UserDetails");
            $sql = "INSERT INTO USERS VALUES(?,?,?,?)";
            $prep = mysqli_prepare($connect, $sql);
            if (!mysqli_stmt_bind_param($prep, "ssis", $name, $pass, $tel, $mail)) {
                echo mysqli_error($connect);
            }
            if (!mysqli_stmt_execute($prep)) {
                echo mysqli_stmt_error($prep);
            } else {
                sleep(3);
                header("Location: http://localhost/programming/login.php");
            }
        }
        if (!empty($name_err)) {
            $name = "";
        }
        if (!empty($pass_err)) {
            $pass = "";
        }
        if (!empty($mail_err)) {
            $mail = "";
        }
        if (!empty($tel_err)) {
            $tel = "";
        }
    }
    ?>
    <div class="main">
        <div class="title">
            <p>Login Here</p><br>
        </div>
        <form action="<?php echo "$_SERVER[PHP_SELF]" ?>" method="post">
            <table>
                <tr>
                    <td>
                        <label for="usname">Enter Your Username: </label>
                    </td>
                    <td>
                        <input type="text" name="Username" value="<?php echo "$name"; ?>" id="usname"><span class="error"> <?php echo "$name_err"; ?></span><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Enter Your Password: </label>
                    </td>
                    <td>
                        <input type="password" name="password" value="<?php echo "$pass"; ?>" id="pass"><span class="error"> <?php echo "$pass_err"; ?></span><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Phone">Enter Your Phone Number: </label>
                    </td>
                    <td>
                        <input type="tel" name="number" value="<?php echo "$tel"; ?>" id="Phone"><span class="error"> <?php echo "$tel_err"; ?></span><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Enter Your Email Address: </label>
                    </td>
                    <td>
                        <input type="email" name="email" value="<?php echo "$mail"; ?>" id="email"><span class="error"> <?php echo "$mail_err"; ?></span><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Submit" class="submit">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </div>


</body>

</html>