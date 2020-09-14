<?php include_once('../authen.php') ?>
<?php
    //echo '<script> alert("Finished Creating!")</script>'; 
    //header('Refresh:0; url=index.php');
    //print_r($_POST);

    if(isset($_POST['submit'])){
        $sql_check_username = "SELECT * FROM `admin` WHERE `username` = '".$_POST['username']."'";
        $check_username = $conn->query($sql_check_username);

        if(!$check_username->num_rows){
            echo "ไม่มีผู้ใช้แล้ว";
            $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $sql = "INSERT INTO `admin` (`first_name`, `last_name`, `username`, `password`, `status`, `last_login`, `created_at`, `updated_at`) 
            VALUES ('".$_POST['first_name']."',
                    '".$_POST['last_name']."', 
                    '".$_POST['username']."',
                    '".$hashed."',
                    '".$_POST['status']."',
                    '".date("Y-m-d H-i-s")."',
                    '".date("Y-m-d H-i-s")."',
                    '".date("Y-m-d H-i-s")."');"; 
            $result = $conn->query($sql);
            if($result){
                echo '<script> alert("Finished Creating!")</script>'; 
                header('Refresh:0; url=index.php');
            }else{
                echo '<script> alert("Finished Creating!")</script>'; 
                header('Refresh:0; url=form-create.php');
            }
        }
        else{
            echo '<script> alert("Username is already exists!")</script>'; 
            header('Refresh:0; url=form-create.php');
        }
    }else{
        header('Refresh:0; url=index.php');
    }
    ?>