<?php
include 'Header.php';
require 'config.php';
$lendBkTB = "";
$retmemID="";

$fname="";
$lname="";
$regno="";
$email="";
$lendDate="";


if (isset($_POST['Retrieve_Book_Member_Find_Id'])){

$retmemID=$_POST['Retrieve_Book_Member_Find_Id'];

$sql_memdel = "SELECT persion.userID,persion.FName,persion.LName,persion.email
FROM barrow_returns LenRet, client persion 
WHERE persion.userID=lenRet.userID AND LenRet.userID=$retmemID
GROUP BY LenRet.userID";

$sql_bk = "SELECT LenRet.issuedDate,inve.Name,LenRet.IID,lenRet.fine,LenRet.dueDate
FROM barrow_returns LenRet, inventory inve 
WHERE inve.IID=lenRet.IID AND LenRet.userID=$retmemID
ORDER BY IID";
//$lendBkTB = "";

$resultMem= $con->query($sql_memdel);
if ($resultMem->num_rows>0){
    while($row2=$resultMem->fetch_assoc()){
        echo "Code No :    ".$row2["userID"]."  Book Name :  ".$row2["FName"]."   Author Name  ".$row2["LName"]." ISBN  :  ".$row2["email"]."<br><br>";
        $fname.=$row2["FName"];
        $lname.=$row2["LName"];
        $regno.=$row2["userID"];
        $email.=$row2["email"];
        

    }
}

$resultBk = $con->query($sql_bk);
if ($resultBk->num_rows>0){
    while($row1=$resultBk->fetch_assoc()){
        //echo "Code No :    ".$row1["IID"]."  Book Name :  ".$row1["Name"]."   Author Name  ".$row1["fine"]." ISBN  :  ".$row1["issuedDate"]."<br><br>";
        $userID=$row1["IID"];
        $BKname=$row1["Name"];
        $fine=$row1["fine"];
        $lendDate=$row1["issuedDate"];
        $dueDate.=$row1["dueDate"];

        $lendBkTB .= " <tr><td>$userID</td><td>$BKname</td><td>$lendDate</td><td>$dueDate</td><td>$fine</td><td><input type=\"checkbox\" id=\"Retrieve_Book_Table_Report_Status\" name=\"Retrieve_Book_Table_Report_Status\"></td></tr>";
    }
}


else{
    $disErro = "<script>console.log('$retmemID is not Lended Yet')</script>";
    echo $disErro;
 }

}


?>

<div class="pop-retrive">
    <div class="pop-content retBK">
            <div class="pop-close2"><b onclick="closeWindow()">+</b></div>
            <!----------------------------------RETRIEVE_BOOK_HTML_START------------------------------------------------------------------------------------------>

            <div>
                <h2 class="pop-titel">RETRIEVE BOOK</h2>
                <!---------------------------Studnet Details - Lended ------------------------------------------------------------------------------------------------->
                <div>
                    <div class="pop-topic">
                        <h3><u>Member Details</u></h3>
                        <center>
                            <form method="post">
                                <input type="text" name="Retrieve_Book_Member_Find_Id" class="pop-search" placeholder="Reg No / NIC" size="50" required>
                                <input type="submit" id="Retrieve_Book_Member_Find_Submit" name="Retrieve_Book_Member_Find_Submit" class="btn-search"  value="Search">
                            </form>
                        </center>
                    </div>
                    <div>
                        <table class="pop-table RetrieveMem">
                            <form>
                                <tr>
                                    <td>
                                        <Label>First Name</Label>
                                    </td>
                                    <td>
                                        <input type="text" name="Retrieve_Book_Table_Fname" class="pop-retbar membar" value="<?php echo$fname; ?>"  readonly>
                                    </td>
                                    <td>
                                        <Label>Last Name</Label>
                                    </td>
                                    <td>
                                        <input type="text" name="Retrieve_Book_Table_Lname" class="pop-retbar membar" value="<?php echo$lname; ?>" readonly>
                                    </td>
                                </tr>

                                <br> <br>

                                <td>
                                    <Label>Reg No</Label>
                                </td>
                                <td>
                                    <input type="text"  name="Retrieve_Book_Table_RegNo readonly" class="pop-retbar membar" value="<?php echo$regno; ?>" readonly>
                                </td>
                                <td>
                                    <Label>Email</Label>
                                </td>
                                <td>
                                    <input type="email" name="Retrieve_Book_Table_Email" class="pop-retbar membar" value="<?php echo$email; ?>" readonly>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <Label>Lend Date</Label>
                                    </td>
                                    <td><input type="tex" class="pop-retbar membar"  id="Retrieve_Book_Table_LendDate" name="Retrieve_Book_Table_LendDate" value="<?php echo$lendDate; ?>" autocomplete="" readonly></td>
                                    <td>
                                        <Label>Date</Label>
                                    </td>
                                    <td><input type="date" class="pop-retbar membar"  id="Retrieve_Book_Table_DueDate" name="Retrieve_Book_Table_DueDate" value="Today" readonly></td>
                                </tr>


                            </form>
                        </table>

                    </div>
                </div>
                <br><br>
                <!---------------------------Book Details - Lended By Student ------------------------------------------------------------------------------------------------->
                <div>
                    <h3 class="pop-topic"><u>Book Details</u></h3><br
                    <div>
                        <table class="pop-table RetrieveBK">
                            <tr>
                                <th>IID</th>
                                <th>Book Name</th>
                                <th>Lend Date</th>
                                <th>Due Date</th>
                                <th>Fine</th>
                                <th>Retrieve</th>
                            </tr>
                            <?php echo $lendBkTB; ?>
                        </table>
                    </div>
                </div>
                <!-----------------------------Retrieve Button----------------------------------------------------------------------------------------------->

                <div>
                    <form>
                    <input type="submit" id="retrieve_button" name="retrieve_button" class="btn-pop" value="Retrieve">
                    </form>
                    
                </div>

            </div>

            <!----------------------------------RETRIEVE_BOOK_HTML_END------------------------------------------------------------------------------------------>
    </div>
</div>
</body>
</html>