<?php 
    include('server.php');



    if(isset($_POST['delete'])){

        $delete_ID  = $_GET['event_id'];
        $sql = "DELETE FROM event_db WHERE event_id = $delete_ID";

        if($conn->query($sql) == TRUE){
            echo "<script>alert('ลบสำเร็จ')</script>";
            header("refresh:0; url=admin_page.php");
        }else{
            echo "<script>alert('Fail')</script>";
            header("refresh:0; url=admin_page.php");
        }


    } 

?>