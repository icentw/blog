<?php include_once('../authen.php') ?>
<?php
    if(isset($_GET['id'])){
        $sql = "DELETE FROM `articles` WHERE `articles`.`id` = '".$_GET['id']."' " ;
        $result = $conn->query($sql);
        
        if($conn->affected_rows){
            echo '<script> alert("Finished Deleting!")</script>'; 
            header('Refresh:0; url=index.php');
        }else{
            echo '<script> alert("Nodata!")</script>'; 
            header('Refresh:0; url=index.php');
        }
    }else{
        header('Refresh:0; url=index.php');
    }
?>