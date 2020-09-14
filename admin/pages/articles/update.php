<?php include_once('../authen.php') ?>
<?php

    if(isset($_POST['submit'])){
        

        $image_name = $_POST['data_file'];
        if( $_FILES['file']['error'] == 0){
            if( !getimagesize($_FILES['file']['tmp_name']) ){
                echo '<script>alert (" Upload picture only !!") </script>'.
                header('Refresh:0; url=index.php');
            }

            $temp = explode('.', $_FILES['file']['name']);
            $image_name = round(microtime(true)*9999);
            $url_upload = '../../../assets/image/blog' . $image_name;
            

            if( !move_uploaded_file($_FILES['file']['tmp_name'],$url_upload) ){
                echo '<script>alert ("Can not Upload picture,upload picture again") </script>'.
                header('Refresh:0; url=index.php');
            }
        }
        $detail = str_replace( '../../../' , './' , $_POST['detail'] );
        $tag = 'all,' . join(',' , $_POST['tag']);
        $status = isset( $_POST['status'] ) ? 'true' : 'false';

        $sql =" UPDATE `articles`
                SET subject = '".$_POST['subject']."',
                    sub_title = '".$_POST['sub_title']."',
                    detail = '".$detail."',
                    image = '".$image_name."',
                    tag = '".$tag."',
                    status = '".$status."',
                    update_at = '".date("Y-m-d H:i:s")."' 
                    WHERE id = '".$_POST['id']."' ";
        $result = $conn->query($sql) or die ($conn->error);
        if($result){
            echo '<script>alert ("Edit Success") </script>'.
                header('Refresh:0; url=index.php');
        }

    }else{
        header('Location: index.php');
    }

    // echo '<script> alert("Finished Updating!")</script>'; 
    // header('Refresh:0; url=index.php');
?>