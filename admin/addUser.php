<?php 
include("../conTest.php");
if(isset($_POST["sub"])){
$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["password"];
$city=$_POST["city"];
$mobile=$_POST["mob"];
$sql="INSERT INTO user_table( `name`, `email`, `password`,`city`,`mobile`) 
VALUES ('$name','$email','$pass','$city','$mobile') ";
mysqli_query($con,$sql);
header("location:userList.php");
}
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
        
        
        <form method="Post">
                
            <div class="row">
                <div class="col-md-10 pl-5">
                    <div class="form-group">
                        <label>Name</label>
                            <input type="text" class="form-control"  placeholder="Name" name="name">
                    </div>
                </div>
            </div>
                                            
            <div class="row">
                <div class="col-md-5 pl-5">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                </div>
                                        
                <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" placeholder="Password" name="password" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 pl-5">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="City" name="city">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Mobile Number</label>
                                                    <input type="text" class="form-control" placeholder="Mobile Number" name="mob">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-10 pl-5">
                                        <button type="submit" name="sub" class="btn btn-info btn-fill pull-right">Submit</button>
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
