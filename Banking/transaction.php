<?php
require_once ('include/cn.php');
if (isset($_POST['transub'])) {
    $userid =  $_REQUEST['fortraid'];
    $usernm =  $_REQUEST['fortransac'];
    $scuser =  $_REQUEST['transactdrop'];
    $transact1 = $_REQUEST['newtr'];
    $transact2 = $_REQUEST['cramount'];
    $transact=$transact2-$transact1;
   
    $dt=strftime("%d.%m.%Y %H:%M");
    $sql = "INSERT INTO $tbltransact (id, Sender, Receiver, Amount, Date) VALUES ('Null','$usernm','$scuser','$transact1','$dt')";
              
    if ($conn->query($sql) === true) {
        $sql2 = "UPDATE $tblcustumer SET balance='$transact',transcatlast='$transact1',transactuser='$scuser' WHERE id=$userid";
            if ($conn->query($sql2) === TRUE) {
                $sql3 = "SELECT * FROM $tblcustumer WHERE name='$scuser'";
                $result = $conn->query($sql3);
                if ($result->num_rows > 0) {
                    while ($row3 = $result->fetch_assoc()) {
                      $cside=$row3['id'];
                      $cotran=$row3['balance'];
                      $tran=$cotran+$transact1;
                      $sql4 = "UPDATE $tblcustumer SET balance='$tran' WHERE id=$cside";
                      if ($conn->query($sql4) === true) {
                        require_once ('transactionlist.php');
                    
                        ?>
                        <!DOCTYPE html>
                        <html>
                        <head>
                        <title></title>
                        </head>
                        <body>
                        <script>alert('Applied Successfully');</script>
        
                        </body>
                        </html>
        
                         <?php
                       }
                   }   
                }
            } 
            else
            {
                echo "Error updating record: " . $conn->error;
            }   
        } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

else
{
echo "Wrong!";
}
?>