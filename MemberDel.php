<?php
include 'Header.php';
require 'config.php';

$fname="";
$lname="";
$addr="";
$regno="";
$memEmail="";
$nic="";
$mob="";

if(isset($_POST['Member_Details_Find_Id'])){
$memberdel=$_POST['Member_Details_Find_Id'];
echo $memberdel;

$sql="SELECT  i.FName,i.LName,i.Address,i.userID,i.email,i.NIC,i.phoneNumber
FROM client i
WHERE userID = '$memberdel' OR NIC='$memberdel'";

$memberDetails = $con->query($sql);

if ($memberDetails->num_rows>0){
while ($row=$memberDetails->fetch_assoc()){
$fname=$row["FName"];
$lname=$row['LName'];
$addr=$row['Address'];
$regno=$row['userID'];
$memEmail=$row['email'];
$nic=$row['NIC'];
$mob=$row['phoneNumber'];
}
}

else{
echo "Null";
}

}


?>


<div class="pop-memberDel">
    <div class="pop-content memContent">
      <div class="pop-close3"><b onclick="closeWindow()">+</b></div>
            <!----------------------------------Member_Details_HTML_START------------------------------------------------------------------------------------------>

            <div>
                <h3 class="pop-titel">Member Details</h3>
                <!----------------------------------Member_Details_HTML_Find------------------------------------------------------------------------------------------>

                <div>
                   <center>
                   <form method="post">
                        <input type="text" class="pop-search" name="Member_Details_Find_Id" size="25" placeholder="Reg No / NIC" required>
                        <input type="submit" id="Member_Details_Find_Submit" name="Member_Details_Find_Submit" class="btn-search" value="Search">
                    </form>
                   </center> 
                </div>

                <br>
                <hr>
                <br>
                <!----------------------------------Member_Details_HTML_Details------------------------------------------------------------------------------------------>

                <div>
                    <table class="pop-table Memdel">
                      <form  method="post">
                            <tr>
                                <td>
                                    <label>First Name</label>
                                </td>
                                <td>
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_Fname" size="30" value="<?php echo $fname; ?>">
                                </td>
                                <td>
                                    <label>Last Name</label>
                                </td>
                                <td>
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_Lname" size="26" value="<?php echo $lname; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Address</label>
                                </td>
                                <td colspan="3">
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_Address" size="93" value="<?php echo $addr; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Reg No</label>
                                </td>
                                <td>
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_RegNo" size="30" value="<?php echo $regno; ?>">
                                </td>
                                <td>
                                    <label>SLIIT Email</label>
                                </td>
                                <td>
                                    <input type="email" class="pop-retbar membar"  name="Member_Details_Table_Email" size="27" value="<?php echo $memEmail; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>NIC</label>
                                </td>
                                <td>
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_NIC" size="30" value="<?php echo $nic; ?>">
                                </td>
                                <td>
                                    <label>Mobile</label>
                                </td>
                                <td>
                                    <input type="tel" class="pop-retbar membar"  name="Member_Details_Table_MobNo" size="27" value="<?php echo $mob; ?>">
                                </td>
                            </tr>
                        
                    </table>

                </div>

                <!----------------------------------Member_Details_HTML_Buttons------------------------------------------------------------------------------------------>

                <div class="Member_Details_Button">
    
                        <input type="reset" id="Member_Details_Button_Clear" name="Member_Details_Button_Clear"  class="btn-pop mem btn-clear" value="Clear">
                        <input type="submit" id="Member_Details_Button_Update" name="Member_Details_Button_Clear"  class="btn-pop mem btn-update" value="Update">
                        <input type="submit" id="Member_Details_Button_Remove" name="Member_Details_Button_Clear"  class="btn-pop mem btn-remove" value="Remove">
                    </form>

                </div>

            </div>
            <!----------------------------------Member_Details_HTML_END------------------------------------------------------------------------------------------>


    </div>
</div>
<script src="./js/main.js"></script>
</body>
</html>