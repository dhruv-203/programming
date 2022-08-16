<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,body{
            width: 100%;height: 100%;
            
        }
        *{
            margin: 0;padding: 0;
        }
        .title{
            height: 15%;
            text-align: center;
            width: 100%;
            font-size: 25px;
            margin-top: 10px;
            font-family: monospace;
            font-weight: 700;
        }
        .main{
            height: 67%;
            position: absolute;
            width:31%;
            padding: 20px;
            left:35%;
            top:15%;
            font-size: 14px;
            border: 1px black solid ;
        }
        form{
            width: 100%;
            height: 85%;
        }
        table{
            width: 100%;
            height: 100%;
        }
        td,tr{
            padding: 0;
        }
        tbody{

            width: 100%;
            height: 100%;
        }
        .error{
            color: red;
        }
        .submit{
            width:130px;
            border-radius: 100px;
            height: 50px;
            font-size: 20px;
            background: none;
            background-color:  #ff4f71;
            border:1px solid black;
            position: relative;
            left:33%;
        }
    </style>
</head>
<body>
    <?php  
    $name_err=$mail_err=$pass_err=$tel_err="";
    $name=$mail=$tel="";
    if($_SERVER["RESQUEST_METHOD"]=="POST"){
        if(empty($name)){
            $name_err="* Name Field is empty";
        }
        else{
            $name=$_POST['Username'];
            if(preg_match("/^[a-zA-Z-' ]*$/",$name))
        {
                $name_err="Only letters and Whitespaces are allowed";
            }   
        }
    }
    ?>
    <div class="main">
    <div class="title">
        <p>Login Here</p><br>
    </div>
        <form action="<?php echo"$_SERVER[PHP_SELF]" ?>" method="post">
        <table>
            <tr>
                <td>
                <label for="usname">Enter Your Username: </label>
                </td>
                <td>
                    <input type="text" name="Username" id="usname"><span class="error">         <?php echo"$name_err";?></span><br>
                </td>
            </tr>
            <tr>
                <td>
                <label for="pass">Enter Your Password: </label>
                </td>
                <td>
                <input type="password" name="password" id="pass"><span class="error">           <?php echo"$pass_err";?></span><br>
                </td>
            </tr>
            <tr>
                <td>
                <label for="Phone">Enter Your Phone Number: </label>
                </td>
                <td>
            <input type="tel" name="number" id="Phone"><span class="error">                     <?php echo"$tel_err";?></span><br>
                </td>
            </tr>
            <tr>
                <td>
                <label for="email">Enter Your Email Address: </label>
                </td>
                <td>
                    <input type="email" name="email" id="email"><span class="error">            <?php echo"$mail_err";?></span><br>
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