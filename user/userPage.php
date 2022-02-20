<?php
include("header.php");
?>
<?php
session_start();
include("../conTest.php");
$user_id=$_SESSION['uid'];
$sql="SELECT * FROM crud_table WHERE user_id='$user_id'";
$rs=mysqli_query($con,$sql);

?>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Message<a href="addNote.php" class="btn btn-primary pull-right btn-fill">Draft Message</a> </h4>
                                    

<div class="card-body table-full-width table-responsive">
    <table class="table table-hover table-striped ">
        <thead>
            <th>ID</th>
            <th>Subject</th>
            <th>Content</th>
            <th>Draft Time</th>
            <th>Action</th>
            
        </thead>
        <?php $i=1; while($fet_data=mysqli_fetch_assoc($rs)){  ?>
        <tbody>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $fet_data['subject'];?></td>
                <td><?php echo $fet_data['message'];?></td>
                <td><?php echo $fet_data['save_time'];?></td>
                <td>
                <a href="message_edit.php?id=<?php echo $fet_data['id']; ?>">Edit</a>&emsp;
                <a href="message_delete.php?id=<?php echo $fet_data['id']; ?>">Delete</a></td>
                
            </tr>
        </tbody>
        <?php $i++; } ?>
    </table>
</div>
</div>
                                
</div>
</div>

</div>

</div>
</div>
<?php
include("footer.php");
?>