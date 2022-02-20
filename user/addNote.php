<?php 
session_start();

include("../conTest.php");
if(isset($_POST["sub"])){
$subject=$_POST["subject"];
$msg=$_POST["message"];
$time = date("F j, Y, g:i a"); 
$user_id=$_SESSION["uid"];
$sql="INSERT INTO crud_table( `subject`, `message`,`save_time`,`user_id`) 
VALUES ('$subject','$msg','$time','$user_id') ";
if(mysqli_query($con,$sql)){
    header("location:userPage.php");

}

}
?>

<?php
include("header.php");
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
        
        
        <form method="Post" name="myForm">
                
            <div class="row">
                <div class="col-md-5 pl-5">
                    <div class="form-group">
                        <label>Subject</label>
                            <input type="text" class="form-control"  placeholder="Subject" name="subject">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 pl-5">
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" placeholder="Message" name="message"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 pl-5">
            <button type="submit" name="sub" class="btn btn-info btn-fill pull-right">Save</button>
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