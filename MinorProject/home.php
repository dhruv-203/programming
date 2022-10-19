<?php 
session_start();
if($_SESSION['LOGIN']!=1){
    header('Location:http://localhost/programming/MinorProject/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Home.css">
</head>
<body>
   
    <div class="main" id="bg" >
        <div class="nav">
            <div class="createPostCont" style="height: 100%; width:100%;" >
                <form  method="post" id="form1" enctype="multipart/form-data"action="logout.php" style="display:flex;justify-content:space-around; height:100%; width:100%;">
                    <!-- <input type="button" value="New Posts" onclick="myfun();"> -->
                    <label for="uploadcont" id="uploadlabel">
                        <img src="Uploadicon.png" height="50px" width="50px" style="position:relative;top:4px" alt="">
                        <input type="file" name="files" id="uploadcont">
                    </label>
                    <input type="button" onclick="myfun();" value="Submit">
                    <input type="submit" value="Logout">
                    </form>
            </div>
        </div>
        <div class="body">
            <div class="left"></div>
            <div class="mainBody" id="display">
                
            </div>
            <div class="right"></div>
        </div>
    </div>
</body>
<script>
    var display = document.querySelector('#display');
    function showcase(){
        var getdata = new XMLHttpRequest();
    getdata.onreadystatechange = function () {
        if(this.readyState==4&&this.status==200){
            display.
            innerHTML=this.responseText;
        }
    }
    getdata.open('GET','display.php');
    getdata.send();
    }
    document.onload=showcase();
    async function myfun(){
        var value = document.getElementById("uploadcont").value;
        if(value!=null||value!=""||value!=undefined){
            var formdata = new FormData();
            formdata.append('files',uploadcont.files[0]);
    await fetch('file.php',{method:"POST", body:formdata});
    showcase();
        }
    }
    function logout1(){
      location.replace("logout.php");
    }
</script>
</html>