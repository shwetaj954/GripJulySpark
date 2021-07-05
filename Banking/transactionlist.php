<?php
require_once ('include/cn.php');
require_once ('include/header.php');
?>
<div class="container">
    <h1 class="text-center tmp">TRANSACTION LIST</h1>
    <br>
    <div class="table-responsive">
<table class="table text-center"> 
 <thead>
    <tr class="tmp1">
        <th scope="col">SR.No</th>
        <th scope="col">SENDER</th>
        <th scope="col">RECIVER</th>
        <th scope="col">AMOUNT</th>
        <th scope="col">DATE</th>
    </tr>               
    <?php
        $sql6 = "SELECT * FROM $tbltransact";
        $result2 = $conn->query($sql6);
        if ($result2->num_rows > 0) {
           while($row2 = $result2->fetch_assoc()) {
    ?>  
    <tr class="tmp2"> 
     <th scope="col"><?php echo $row2['id'];?></th>
     <th scope="col"><?php echo $row2['Sender'];?></th>
     <th scope="col"><?php echo $row2['Receiver'];?></th>
     <th scope="col"><?php echo $row2['Amount'];?></th>
     <th scope="col"><?php echo $row2['Date'];?></th>
          
    </tr>
   
    <?php
      }

    }
    else{
    echo "0 results";
  }
    ?>

  </div>
  </thead>
  </table>
    </div>
</div>