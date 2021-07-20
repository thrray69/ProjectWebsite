<?php 
    include('server.php');



    if(isset($_POST['submit'])){

        $delete_ID  = $_GET['id'];
        $sql = "DELETE FROM history_db WHERE id = $delete_ID";

        if($conn->query($sql) == TRUE){
            echo "<script>alert('ลบสำเร็จ')</script>";
            header("refresh:0; url=admin_page.php");
        }else{
            echo "<script>alert('Fail')</script>";
            header("refresh:0; url=admin_page.php");
        }


    } 

?>