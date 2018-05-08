
<?php
$conn = mysqli_connect("localhost","root","","sss");

	$query = "SELECT * FROM employer_registration WHERE  PreferredUserID LIKE'$_GET[search_employer]%'";
	$result=mysqli_query($conn,$query);
	while ($rows = mysqli_fetch_array($result)) 
	{      
            //fetched data from database
		      $ID        	 =    $rows['ID'];
          $Dat_Cov   =    $rows['Date_Coverage'];
          $add1      =    $rows['Address_Line1'];
          $add2      =    $rows['Address_Line2'];
          $ctypro    =    $rows['CityProvince'];
          $postal    =    $rows['PostalCode'];
          $landline  =    $rows['Landline_No'];
          $mobileNo  =    $rows['Mobile_No'];
          $prefe     =    $rows['PreferredUserID'];
          $ComAdEM   =    $rows['CompanyEmailAd'];


?>
<tr id="record">
	  <td style="width:8%;position:relative;left:15px"><?php echo $ID?></td>
    <td style="width:12.5%"><?php echo $Dat_Cov?></td>
    <td style="width:22%"><?php echo $add1?></td>
    <td style="width:22%"><?php echo $add2?></td>
    <td style="width:12.5%"><?php echo $ctypro?></td>
    <td style="width:16.5%"><?php echo $prefe?></td>
    <td>
      <button class="btn btn-warning" style="position:relative;top:-2px;left:-5px"; data-toggle="modal" data-target="#editModal<?php echo $ID?>"><span class="glyphicon glyphicon-edit"></span> Edit</button>
       <div class="modal fade modal" id="editModal<?php echo $ID?>" tabindex="-1">
           <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#016194;">
                     <button class="close" data-dismiss="modal" style="color:white" id="close">&times;</button>
                     <h2 class="modal-title"><font color="white">Edit</font></h2> 
                     
                     
                </div>
                <div class="modal-body">
                     <b>ID:&nbsp;&nbsp;</b><input type="text" id="id<?php echo $ID?>" value="<?php echo $ID?>" disabled="disabled">  
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Covered:&nbsp;&nbsp;</b><input type="date"  id="dat<?php echo $ID?>" value="<?php echo $Dat_Cov?>">
                     <br>
                     <b>Address Line 1:</b><input type="text" class="form-control" id="ad1<?php echo $ID?>" value="<?php echo $add1?>"> 

                     <b>Address Line 2:</b><input type="text" class="form-control" id="ad2<?php echo $ID?>" value="<?php echo $add2?>"> 
                     <br>
                     <b>City/Province:&nbsp;&nbsp;</b><input type="text"  id="cty<?php echo $ID?>" value="<?php echo $ctypro?>">
                    &nbsp;&nbsp;
                     <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postal:&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" id="pos<?php echo $ID?>" value="<?php echo $postal?>">
                     <br>
                     <br>
                     <b>&nbsp;&nbsp;Landline No:&nbsp;&nbsp;</b><input type="text" id="lnd<?php echo $ID?>" value="<?php echo $landline?>"> 
                     <b>&nbsp;&nbsp;&nbsp;&nbsp;Mobile No:&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" id="mobno<?php echo $ID?>" value="<?php echo $mobileNo?>"> 
                     <br><br>
                     <b>Preferred User ID:</b><input type="text" class="form-control" id="pref<?php echo $ID?>" value="<?php echo $prefe?>"> 

                     <b>Company Email Address:</b><input type="text" class="form-control" id="comem<?php echo $ID?>" value="<?php echo $ComAdEM?>">      
                </div>

                    <div class="modal-footer">
                           <button class="btn btn-success btn-block" id="btn-Update" type="submit" onclick="updateData1(<?php echo $ID?>)"   data-dismiss="modal"><span class="glyphicon glyphicon-edit"  ></span> Edit</button>
                    </div>
                </div>
              </div>
           </div>
         </div>   
    </td>
</tr>
		
        

<?php  }
 
   
?>	   