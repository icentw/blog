<?php include_once('../authen.php') ?>
<?php
    // echo '<script> alert("Finished Creating!")</script>'; 
    // header('Refresh:0; url=index.php');
    //print_r($_POST);
   //print_r($_FILES['file']);

    if(isset($_POST['submit'])){
        $tag = 'all,'.join(',', $_POST['tag']);
        $status = isset($_POST['status']) ? 'true' : 'false';
        $temp = explode('.', $_FILES['file']['name']);
        $detail = str_replace('../../../','./',$_POST['detail'] );
        $newname = round(microtime(true)*9999).'.'.end($temp);
        $url_upload = '../../../assets/image/blog/'.$newname;
        
        if(move_uploaded_file($_FILES['file']['tmp_name'], $url_upload) ){
            $sql = "INSERT INTO `articles` (`subject`, `sub_title`, `detail`, `image`, `tag`, `status`, `update_at`, `created_at`) 
                    VALUES ('".$_POST['subject']."',
                            '".$_POST['sub_title']."',
                            '".$detail."',
                            '".$newname."',
                            '".$tag."',
                            '".$status."',
                            '".date("Y-m-d H:i:s")."',
                            '".date("Y-m-d H:i:s")."');" ;
            $result = $conn->query($sql) or die($conn->error);
            if($result){
                echo '<script> alert("เพิ่มข้อมูลสำเร็จ")</script>'; 
                header('location:index.php');
            }
            else{
                echo 'no';
            }
        }
    }
    else{
        header('location:index.php');
        
    }
?>