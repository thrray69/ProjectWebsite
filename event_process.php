<?php include 'server.php'; ?>

<?php 

    $event_name = $_POST['event_name'];
    $event_location = $_POST['event_location'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $event_event_timer = $_POST['event_event_timer'];
    $event_teacher = $_POST['event_teacher'];

    
    
    $sql_ins = "INSERT INTO event_db (event_name, event_location, event_date, event_time, event_event_timer , event_teacher)
                VALUES ('$event_name', '$event_location', '$event_date' ,'$event_time' , '$event_event_timer' , '$event_teacher'  )";
            if($conn->query($sql_ins) == TRUE){
            echo "<script>alert('เพิ่มกิจกรรมสำเร็จ')</script>";
            header("refresh:0; url=admin_page.php");
                }else{
            echo "<script>alert('Fail')</script>";
            header("refresh:0; url=admin_page.php");
            }


?>