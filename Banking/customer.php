<?php
require_once ('include/cn.php');
require_once ('include/header.php');
?>

<div class="container">
  <h1 class="text-center tmp">All Custumers</h1><br>
  <div class="table-responsive">
    <table class="table text-center"> 
      <thead>
       <tr class="tmp1">
        <th scope="col">id</th>
        <th scope="col">Photo</th>
        <th scope="col">Name</th>
        <th scope="col">D.O.B.</th>
        <th scope="col">Email</th>
        <th scope="col">Phone No.</th>
        <th scope="col">Current Balance</th>
        <th scope="col">Last Transaction</th>
        <th scope="col">Transaction User </th>
        <th></th>
        </tr>
      <?php
        $sql1 = "SELECT * FROM $tblcustumer";
        $result = $conn->query($sql1);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            ?>  
          <form role="form" action="profile.php?id=<?php echo $row['id'];?>" method="post" class="form-control">
          <tr class="tmp2">
   
          <th scope="col"><?php echo $row['id'];?></th>
          <th scope="col"><img src="<?php echo $row['img'];?>" alt="photo" height="50px" width="50px"></th>
          <th scope="col"><?php echo $row['name'];?></th>
          <th scope="col"><?php echo $row['dob'];?></th>
          <th scope="col"><?php echo $row['email'];?></th>
          <th scope="col"><?php echo $row['phone'];?></th>
          <th scope="col"><?php echo $row['balance'];?></th>
          <th scope="col"><?php echo $row['transcatlast'];?></th>
          <th scope="col"><?php echo $row['transactuser'];?></th>
          <th scope="col"><BUTTON type="submit" name="userid" class="btu btn">View<i class="material-icons align-middle">visibility</i></BUTTON></th>
          </tr></form>
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
<?php
require_once ('include/footer.php');
 session_unset();
?>
<script>
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>