<?php 
    include('server.php');



    if(isset($_POST['submit'])){

		$event_name = $_POST['event_name'];
		$event_location = $_POST['event_location'];
		$event_date = $_POST['event_date'];
		$event_time = $_POST['event_time'];
		$event_event_timer = $_POST['event_event_timer'];
		$event_teacher = $_POST['event_teacher'];
		
        $update_ID  = $_GET['event_id'];
        $sql = "UPDATE event_db SET event_name = '$event_name' , event_location = '$event_location' , event_date = '$event_date' , event_time = '$event_time' , event_event_timer = '$event_event_timer' , event_teacher = '$event_teacher' WHERE event_id = '$update_ID' ";

        if($conn->query($sql) == TRUE){
            echo "<script>alert('แก้ไขสำเร็จ')</script>";
            header("refresh:0; url=admin_page.php");
        }else{
            echo "<script>alert('Fail')</script>";
            header("refresh:0; url=admin_page.php");
        }


    } 

?>