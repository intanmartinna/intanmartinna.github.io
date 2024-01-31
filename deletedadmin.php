<?php include ('config.php');




if(isset($_GET['id'])){
    $orderID = $_GET['id'];


    $query = "delete from ordering where orderID = '$orderID'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed".mysqli_error($connection, $query));
    }

    else{
        header('location:orderadmin.php?delete_msg=You have deleted the record.');
    }
}

// $query = "delete from 'register' where id"

?>

// $custID = $_POST['RegID'];

// $arahan_sql= "DELETE FROM register WHERE RegID=$RegID";
// if(mysqli_query($conn,$arahan_sql)) {
//     echo "Data deleted successfully.";
// } else {
//     echo "Error deleting data: " . mysqli_error($conn);
// }

// mysqli_close($conn);
?>