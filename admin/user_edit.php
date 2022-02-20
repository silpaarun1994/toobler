<?php 
include("../conTest.php");
if(isset($_POST["up"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $city=$_POST["city"];
    $mobile=$_POST["mob"];
    $query="UPDATE user_table SET name='$name', email='$email', password='$pass',
    city='$city', mobile='$mobile' where id='$_GET[id]'";
    $rs=mysqli_query($con,$query);
    echo "<script>  
    alert('Updated successfully..........');
    </script>";
    header("location:userList.php");
}
$sql="SELECT * FROM user_table WHERE id='$_GET[id]'";
$result=mysqli_query($con,$sql);
$fet_data=mysqli_fetch_assoc($result);
?>
<?php
include("header2.php");
?>
<div class="content">
    <div class="container-fluid">
    <div class="row">
                        <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                    <h4 class="card-title"></h4>
                    <p class="card-category"></p>
            </div>
        
        
        <form method="POST">
                
            <div class="row">
                <div class="col-md-10 pl-5">
                    <div class="form-group">
                        <label>Name</label>
                            <input type="text" class="form-control"  placeholder="Name" value="<?php echo $fet_data['name'];?>" name="name">
                    </div>
                </div>
            </div>
                                            
            <div class="row">
                <div class="col-md-5 pl-5">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" placeholder="Email" value="<?php echo $fet_data['email'];?>" name="email">
                    </div>
                                            </div>
                                        
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" placeholder="Password" value="<?php echo $fet_data['password'];?>" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 pl-5">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="City" value="<?php echo $fet_data['city'];?>" name="city">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <div class="form-group">
                                                    <label>Mobile Number</label>
                                                    <input type="text" class="form-control" placeholder="Mobile Number" value="<?php echo $fet_data['mobile'];?>" name="mob">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-10 pl-5">
                                        <button type="submit" name="up" class="btn btn-info btn-fill pull-right" value="Update">Update</button>
</div>
</div>
                                        <div class="clearfix"></div>
                                    </form>
       </div>
</div>
</div>
    </div>
</div>
            <?php
include("footer.php");
?>
