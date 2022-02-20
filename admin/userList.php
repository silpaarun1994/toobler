<?php
include("header2.php");
?>
<?php
include("../conTest.php");
$sql="SELECT * FROM user_table";
$rs=mysqli_query($con,$sql);

?>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title"> user<a href="addUser.php" class="btn btn-primary pull-right btn-fill">Add User</a> </h4>
                                    <p class="card-category" style="text-align:center">
                                       
                                    </p>

<div class="card-body table-full-width table-responsive">
    <table class="table table-hover table-striped ">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Mobile Number</th>
            <th>Action</th>
            
        </thead>
        <?php $i=1; while($fet_data=mysqli_fetch_assoc($rs)){  ?>
        <tbody>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $fet_data['name'];?></td>
                <td><?php echo $fet_data['email'];?></td>
                <td><?php echo $fet_data['city'];?></td>
                <td><?php echo $fet_data['mobile'];?></td>
                <td>
                <a href="user_edit.php?id=<?php echo $fet_data['id']; ?>">Edit</a>&emsp;
                <a href="user_delete.php?id=<?php echo $fet_data['id']; ?>">Delete</a></td>
                
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