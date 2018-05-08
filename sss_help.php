<!DOCTYPE html>
<head>
<title>Social Security System</title>
</head>
<link rel="icon" href="image/SSS-Abroad.jpg">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
<?php
$conn=mysqli_connect('localhost','root','','login');
if(isset($_POST['submit']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
$query="SELECT * FROM tbl_account WHERE username='$user' AND password='$pass'";
    if($result=mysqli_query($conn,$query))
   		{
           $count=mysqli_num_rows($result);
           if($count==1)
           {
            	header('Location: sss_about.php');
           }
           else
           {
          		echo '<script>alert("incorrect")</script>';
           }
   		}
   }

?>
<div class="container-fluid">
 <div class="row">
   <div class="col-md-2">
   	<img src="image/SSS-Abroad.jpg" class="img-responsive">
   </div>
   <div class="col-md-10">
      <br>
     
      <ul class="nav nav-tabs">
         <li><a href="sss_main.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
         <li><a href="sss_loan.php"><span>₱</span> Loan</a></li>
         <li><a href="sss_about.php"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>	
		     <li class="active"><a href="sss_help.php"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
         	<button type="button" class="btn btn-primary pull-right btn-group-item" data-target="#loginModal" data-toggle="modal"><span class="glyphicon 	glyphicon-user"></span> Login</button>
           </ul>
     </div>
 </div>
<div class="modal fade" id="loginModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">&times;</button>
				<blockquote>
					<h4 class="modal-title text-success">Login</h4>
				</blockquote>  
			</div>
		    <div class="modal-body">
              <form method="post">
              <div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="email" type="text" class="form-control" name="username" placeholder="Username">
					  	</div>
					  	<div class="input-group">
					    	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="password" type="password" class="form-control" name="password" placeholder="Password">
					  	</div>
					  	<div class="modal-footer">
					    	  <button class="btn btn-success" name='submit' name="login" id="log">Login</button>
						  	<button class="btn btn-danger" data-dismiss="modal">Cancel</button>
					  	</div>
                    </form>
			</div>
		</div>
	</div>
</div>
 <script>
//  	$('#loginModal').modal({
//     backdrop: 'static',
//     keyboard: false   
// });
 </script>

</div>


</html>