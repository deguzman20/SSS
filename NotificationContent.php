<table>
<?php
$conn = mysqli_connect("localhost","root","","sss");
$query = "SELECT * FROM requestchange";
$result=mysqli_query($conn,$query);
while($rows=mysqli_fetch_array($result))
{  
   $ID    = $rows['ID']; 
   $log = $rows['log'];
?>
  <tr>
    <td><h6><b><?php echo $log?></b></h6></td>
    <td>
        <button type="button" class="btn btn-success" onclick="acceptData(<?php echo $ID?>)"><span class="  glyphicon glyphicon-ok-circle"></span> Accept</button> 
        <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Decline</button>
      
    </td>
  </tr>
<?php	
}
?>
</table>
<script type="text/javascript">
	function acceptData(ID)
	{  
	   var dataString = "id="+ID;
      $.ajax({
        url: "AcceptNotification.php",
        type:"POST",
        data:dataString,
        success:function(data)
        {
            alert(data);
              $("#notification-box").load("NotificationContent.php");
              $("#notification_count").load("NotificationCount.php");    
        }
    });  
	}
</script>