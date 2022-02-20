<?php 
include("../conTest.php");
if(isset($_POST["update"])){
$subject=$_POST["subject"];
$msg=$_POST["message"];
$time = date("F j, Y, g:i a"); 
$query="UPDATE crud_table SET subject='$subject', message='$msg', save_time='$time' where id='$_GET[id]'";
$rs=mysqli_query($con,$query);
echo "<script>  
alert('Updated successfully..........');
</script>";
header("location:userPage.php");
}
$sql="SELECT * FROM crud_table WHERE id='$_GET[id]'";
$result=mysqli_query($con,$sql);
$fet_data=mysqli_fetch_assoc($result);
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
                            <input type="text" class="form-control"  placeholder="Subject" value="<?php echo $fet_data['subject'];?>" name="subject">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 pl-5">
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" placeholder="Message" name="message"><?php echo $fet_data['message'];?></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 pl-5">
            <button type="submit" name="update" class="btn btn-info btn-fill pull-right">Update</button>
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

