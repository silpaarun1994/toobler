<?php
include("../conTest.php");
$sql="DELETE FROM user_table WHERE id='$_GET[id]'";
$result=mysqli_query($con,$sql);
if($result){
    echo "<script>
    alert('Record deleted successfully');
    </script>";
    } 
    else {
        echo "Error deleting record: " . mysqli_error($con);
    }
    header("location:userList.php");
mysqli_close($con);
?>