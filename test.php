<?php

$delete_ID  = $_REQUEST['event_id'];

require('server.php');

$sql = " DELETE FROM event_db
    WHERE event_id = " . $delete_ID . ';
    ';

$objQuery = mysqli_query($conn, $sql);
if ($objQuery) {
    echo "Record " . $delete_ID . " was Deleted.";
} else {
    echo "Error : Delete";
}


?>