<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sss";

$conn = new mysqli($servername, $username, $password, $dbname);
$data = $_GET['data'];
$sql = "SELECT * FROM member_registration  WHERE CRN_SSNumber='$data'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
   $fname = $row['firstname'];
   $mname = $row['middlename'];
   $lname = $row['lastname'];
   $ssno  = $row['CRN_SSNumber'];  
?>
<b>SS Number</b>&nbsp;<input type="text" value="<?php echo $ssno?>" id="ssno" class="form-control" disabled="disabled">
<b>Firstname:</b>&nbsp;<input type="text" value="<?php echo $fname?>" id="fnames" class="form-control" disabled="disabled">
<b>Middlename:</b>&nbsp;<input type="text" value="<?php echo $mname?>" id="mnames" class="form-control" disabled="disabled">
<b>Lastname:</b>&nbsp;<input type="text" value="<?php echo $lname?>" id="lnames" class="form-control" disabled="disabled">
<b>Date of Contribution:</b><input type="date"  class="form-control" id="dates" class="form-control">
<b>Amount of Contribution:</b><input type="text" id="amount" class="form-control">

<br>
<button type="button" class="btn btn-success pull-right" id="subs" data-dismiss="modal">Submit</button>
<?php
   }
 
} else {
    echo "0 results";
}
?>


<script>
 $(document).ready(function(){
     $("#subs").click(function(){
     	
     var ssno = $("#ssno").val();
     var fname = $("#fnames").val();
     var mname = $("#mnames").val();
     var lname = $("#lnames").val();
     var date  = $("#dates").val();
     var amount = $("#amount").val();
     var dataString = "ssno="+ssno+"&fname="+fname+"&mname="+mname+"&lname="+lname+"&date="+date+"&amount="+amount;
     $.ajax({
          url:"saveContribution.php",
          type:"POST",
          data:dataString,
          success:function(data)
          {
             alert(data);
           contributionlist();
          }
     	});
     });
     $("#amount").keypress(function(e){
    if(e.keyCode<47 || e.keyCode > 57)
    {
      e.preventDefault();
    }
});

 });
</script>