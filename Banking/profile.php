<?php
require_once ('include/cn.php');
if(isset($_POST['userid']))
{
    $usid = $_GET['id'];
    require_once ('include/header.php');
    $sql1 = "SELECT * FROM $tblcustumer WHERE id='$usid'";
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
?>  
         
<div class="container">
    <div class="row">
        <div class="col-s12">
            <div class="card mb-3">
              	<a class="card-img-top" style="margin:0%;">
	        	 <img src="assets/img/profilecover1.webp" class="card-img-top" alt="coverimg">
	            </a>
		        <div class="card-body bg-info">
 		        	<div class="row">
					 <img src="<?php echo $row['img'];?>" class="col-4 profile" alt="coverimg" height="100%" width="100%">
                   	 <div class="col-8 profile1"><br>
			        	<h2 class="card-title text-primary"><?php echo $row['name'];?><a href="#profileupdate"><i class="material-icons align-middle text-primary">account_circle</i></a></h2>
   			        	<p class="card-text rs">
                            <ul class="text-white">
                                <li>D.O.B.-<i class="material-icons align-middle">cake</i><?php echo $row['dob'];?></li>
                                <li>EMAIL ID-<i class="material-icons align-middle">email</i><?php echo $row['email'];?></li>
                                <li>PHONE NO.-<i class="material-icons align-middle">phone</i><?php echo $row['phone'];?></li>
                                <li>CURRENT BALANCE-<i class="material-icons align-middle">account_balance</i><?php echo $row['balance'];?></li>
                                <li>LAST USER TRANSACT-<i class="material-icons align-middle">account_box</i><?php echo $row['transactuser'];?></li>
                        
                            </ul>
                            <small class="text-muted">LAST TRANSACTION-<?php echo $row['transcatlast'];?></small><br>
                            <a href="#transactid" class="btn btu">Create a Transaction<i class="material-icons align-middle">transform</i></a>
                        </p>
                           
    				    </div>
                    </div>
                    <?php
                    $usnm=$row['name'];
                    $usam=$row['balance'];
                        }
                    }
                    else{
                        echo "0 results";
                        }
                    ?>
				</div>
 		 	</div>
		</div>
    </div>
</div>
<hr>
<section id="transactid">

<div class="container bg-primary" style="height: 400px;">
<h2 class="text-center trp">Create a Transaction</h2>
<form method="post" class="form-control text-center" action="transaction.php">
<br>
<input type="text" class="form-control" value="<?php echo $usid;?>" name="fortraid" hidden>
    <input type="text" class="form-control" value="<?php echo $usnm;?>" name="fortransac" hidden>
    <input type="number" class="form-control" value="<?php echo $usam;?>" name="cramount" hidden>
	<select name="transactdrop" class="form-select ford" required>
    <option selected>Select Custumer for Transaction</option>
    <?php
         $sql2 = "SELECT name FROM $tblcustumer";
         $result1 = $conn->query($sql2);
         if ($result1->num_rows > 0) {
            while ($row1 = $result1->fetch_assoc()) {
              echo "<option value='". $row1['name'] ."'>" .$row1['name'] ."</option>";
                }
            }
        else{
        echo "0 results";
        }
    ?>	
	</select>
    <br> 
    <input type="number" class="form-control ford" placeholder="Amount For Transaction" name="newtr" required>
    <br>         
    <BUTTON class="btn btu" type="submit" name="transub">Transfer<i class="material-icons align-middle">transform</i></BUTTON>
</form>
</div>
</section>
<?php
    }
     else
    {
         echo "Something Wrong Try Again!";
    }
?>