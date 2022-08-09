<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html,body{
            margin: 0;padding: 0;
            width: 100%;height: 100%;
        }
        body{
            background-color:#4267B2;
        }
        .titlecon{
            color:white;
            font-size: 50px;
        }
        fieldset{
            width:100%;
            height:100%;
        
        }
        .formbody{
            position: absolute;
            top:18%;
            right:30%;
            height:70%;
            width:40%;
        }
        legend{
            text-align: center;
            font-size: 25px;
        }
        table{
            /*padding:200px;*/
            background-color:#F8F0E3 ;
            width: 100%;
            height: 100%;
        }
        
        td{
            width:50%;
        }
        #usname,#pass,#email,#dob{
            width:80%;
            padding:5px;
        }
        .submit{
            padding: 5px;
            width:100px;
            position: relative;
            left:41%;
        }
        .title{
            position: relative;
            left:42%;
        }

    </style>
    <title>Document</title>
</head>
<body>
    <div class="title">
        <h1 class="titlecon">FlipKart</h1>
    </div>
    <div class="formbody">
        <fieldset>
            <table>
                <form action="form.php" method="post">
                    <legend>LOG-IN PAGE</legend>
                    <tr>
                        <td class="center"><label for="usname">Username: </label></td>
                        <td><input type="text" name="usname" id="usname"></td>
                    </tr>
                    <tr>
                        <td>
                            <label class="center" for="pass">Password: </label>
                        </td>
                        <td>
                            <input type="password" name="pass" id="pass">
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="center"><label for="Gender">Gender: </label></td>
                        <td><input type="radio" name="Gender" id="male" value="Male"><label for="Gender">Male</label></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="Gender" id="female"><label  for="Gender">Female</label></td>
                    </tr>
                    <tr>
                        <td><label class="center" for="email">Enter Your e-Mail: </label></td>
                        <td><input type="email" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td><label for="dob">Date Of Birth: </label></td>
                        <td><input type="date" name="dob" id="dob"></td>
                    </tr>
                    <tr>
                        <td><label for="address">Address: </label></td>
                        <td><textarea name="address" id="add" cols="45" rows="8"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="types[]">Select Your Prefrences: </label></td>
                        <td><select name="types[]" id="type" multiple>
                            <option value="Electronics ">Electronics</option>
                            <option value="Mobiles & Laptops">Mobile and Laptops</option>
                            <option value="Fashion & Styling">Fashion & Styling</option>
                            <option value="Kitchen Ware">Kitchen Ware</option>
                        </select></td>
                    </tr>
                    <tr  class="subcon">
                        <td colspan="2"><button class="submit" type="submit">Submit</button></td>
                    </tr>
                    

                </form>
            </table>
        </fieldset>
    </div>
</body>
</html>