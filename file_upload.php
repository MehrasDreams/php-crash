<?php
    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
    if(!empty($_FILES['upload']['name'])){
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}";


        // get extension of file
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        echo $file_ext;


        if (in_array($file_ext, $allowed_ext)) {

            if ($file_size <= 999999999){
                move_uploaded_file($file_tmp, $target_dir);
                $msg = "<p style='color: green'>File Uploaded in ${target_dir}</p>";
            } else{
                $msg = '<p style="color: aqua">File is to large</p>';
            }


        }else{
            $msg = '<p style="color: yellow">Invalid type of file</p>';
        }


    }else{
        $msg = '<p style="color: red">Pleas choice a file</p>';
    }



?>



<!DOCTYPE html>
<html>

<head>
    <title>Php </title>
</head>


<body>
    <?php echo $msg ?? null; ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    Select Image to upload
    <input type="file" name="upload">
    <br>
    <input type="submit" name="submit">


</form>


</body>


</html>
