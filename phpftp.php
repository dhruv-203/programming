
    <?php
    $add = $_FILES['file']['tmp_name'];
    if(!$res=ftp_connect("localhost")){
        echo "<p>Can't connect to server</p>";
    }
    elseif(!ftp_login($res,"Dhruv","D H R U V")){
        echo "<p>Can't login</p>";
    }
    else{
        // $arr = ftp_nlist($res,"");
        // print_r($arr);
        if(!ftp_mkdir($res,"UploadedPhotos")){
        }
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(!ftp_put($res,"/UploadedPhotos/".$_FILES["file"]["name"],$add,FTP_BINARY)){
                echo "<p>Error Uploading</p>";
            }
            else{
                print_r($arr=ftp_nlist($res,"/UploadedPhotos"));
                if(!ftp_get($res,"C:/Users/ADMIN/Downloads/".basename($arr[0]),$arr[0],FTP_ASCII)){
                    echo "lol";
                }
            }
        }
    }
    ?>
