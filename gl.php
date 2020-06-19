<?php
    $rAction = isset($_REQUEST['Action']) ? $_REQUEST['Action'] : "";
    if($rAction==1){
        if ($_FILES["imgUpload"]["error"] > 0){
            echo "Error: " . $_FILES["imgUpload"]["error"] . "<br />";
        } else {
            if(sizeOf($_FILES)>1){
                die();
            }
            $AllowedTypes = array("image/jpeg","image/png","image/gif");
            $AllowedSize = 6144;
            $Type = $_FILES["imgUpload"]["type"];
            $Size = round($_FILES["imgUpload"]["size"] / 1024);
            $File = $_FILES["imgUpload"]["tmp_name"];
            $Name = $_FILES["imgUpload"]["name"];
            if(in_array($Type,$AllowedTypes) && $Size <= $AllowedSize){
                if($Type=="image/png"){
                    $image = ImageCreateFromPNG($File);
                }elseif($Type=="image/gif"){
                    $image = ImageCreateFromGif($File);
                }else{
                    $image = ImageCreateFromJpeg($File);
                }
                header("Content-Type: image/jpeg");
                $img = ImageJpeg($image);
                
                $fp = fopen($img, 'r');
                $image1 = fread($fp, filesize($img));
                $image1 = addslashes($img);
                fclose($fp);
                $insert = "INSERT INTO Images (Image) values ('$image1')";
                mysql_query($insert);
            }else{
                echo "File not allowed.";
            }
        }
        die();
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script type='text/javascript'>
function TestFileType(fileName, fileTypes) {
    if (!fileName) return;
    dots = fileName.split(".")
    fileType = "." + dots[dots.length - 1];
    if (fileTypes.join(".").indexOf(fileType) != -1) {

    } else {
        document.getElementById('imageForm').reset();
        alert('That file type is not supported');
    }
};
</script>
<style>
    
</style>
</head>
<body>
<div style=''>
<form enctype="multipart/form-data" name='imageForm' id='imageForm' action='/tscan.php' method='POST'>
<input type='hidden' value='1' name='Action'>
<table cellpadding='0' cellspacing='0' border='0'>
    <tr>
        <td>
        Please select an image (it has to be a .jpg image)<br>
        <input type='file' name='imgUpload' id='imgUpload' onkeydown='this.blur();' onchange="TestFileType(this.value, ['.jpg','.png','.gif']);">
        </td>
    </tr>
</table>
<input type='submit' value='submit'>
</form>
</div>

</body>
</html>