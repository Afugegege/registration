<?php
error_reporting(E_ALL ^ E_WARNING);

$id = $_POST["id"];

$con = new mysqli("localhost", "root", "", "test");

if ($con->connect_error) {
    echo "$con->connect_error";
    die("Connection Failed: " . $con->connect_error);
}

switch ($_POST["functionname"]) {
    case 'getRecordById':
        $id = $_POST["id"];
        $query = "SELECT * FROM student WHERE id = " . $id;
        $result = $con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode($row);
        }
        break;
        case 'deleteById':
            $id = $_POST["id"];
            $query = "DELETE FROM student WHERE id = " . $id;
            $result = $con->query($query);
            
            // Respond with a success or error message
            echo ($result) ? "Record deleted successfully" : "Error deleting record";
            break;
}

$con->close();
?>
