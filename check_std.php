<?php 
    include('server.php');



    $event_id = $_GET['id'];
    $std_num = $_POST['std_num'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $select_class = $_POST['select_class'];
    $select_type = $_POST['select_type'];

    if(isset($_POST['submit'])){
        // $sql = "SELECT * FROM event_db WHERE event_id = $ev_id ";
        // $result = $conn->query($sql);
        // $row = $result->fetch_assoc();

        $sql_ins = "INSERT INTO history_db (event_id , std_num , first_name , last_name , class , type) 
        VALUES ('$event_id' , '$std_num' , '$first_name' , '$last_name' , '$select_class' , '$select_type')";
        if($conn->query($sql_ins) == TRUE){
            echo "<script>alert('ลงชื่อสำเร็จ')</script>";
            header("refresh:0; url=index.php");
        }else{
            echo "<script>alert('Fail')</script>";
            header("refresh:0; url=index.php");
        }


    } 


?>