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
                <form action="file.php" method="post" enctype="multipart/form-data" style="display:flex;justify-content:space-around; height:100%; width:100%;">
                    <input type="button" value="New Posts" onclick="myfun();">
                    <label for="uploadcont" id="uploadlabel">
                        <img src="Uploadicon.png" height="50px" width="50px" style="position:relative;top:15px" alt="">
                        <input type="file" name="files" id="uploadcont">
                    </label>
                    <input type="submit" value="Submit">
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
    function myfun(){
        
        var getdata = new XMLHttpRequest();
    getdata.onreadystatechange = function () {
        if(this.readyState==4&&this.status==200){
            display.innerHTML=this.responseText;
        }
    }
    getdata.open("GET", "display.php",true);
    getdata.send();
    }
</script>
</html>