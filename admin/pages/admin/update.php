<?php include_once('../authen.php') ?>
<?php
    // echo '<script> alert("Finished Updating!")</script>'; 
    // header('Refresh:0; url=index.php');
    if(isset($_POST['submit'])){
        $sql = "UPDATE `admin` 
                SET `first_name` = '".$_POST['first_name']."',
                `last_name` = '".$_POST['last_name']."',
                `status` = '".$_POST['status']."',
                `updated_at` = '".date("Y-m-d H:i:s")."'
                WHERE `id` = '".$_POST['id']."'; ";

        $result = $conn->query($sql);
        if($result){
            echo '<script> alert("Finished Updating!")</script>'; 
            header('Refresh:0; url=index.php');
        }else{
            echo '<script> alert("Finished Error!")</script>'; 
            header('Refresh:0; url=index.php');
        }
    }else{
        header('Refresh:0; url=index.php');    
    }
?>