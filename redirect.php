<?php
if(isset($_POST['submit'])){
  // Fetching variables of the form which travels in URL
  $name = $_POST['name'];
  $address = $_POST['address'];
  if($name !='' && $address !='')
  {
    header("Location: index.php?name=".$name."&address=".$address);
  }
  else{
    ?>
    <span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span>
  <?php
  }
}
?>