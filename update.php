<?php include('db.php');
include('header.php');
// update records in database
if(isset($_POST['update'])){
    if(isset($_GET['user_id'])){
    $id = $_GET['user_id'];

   $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $middle_name = $_POST['middle_name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $contact = $_POST['contact']; 
    
    $sql = "UPDATE worker SET first_name='$first_name', last_name='$last_name', middle_name='$middle_name', age='$age', address='$address', contact='$contact' WHERE id= $id";
 
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('You have succesfully update the record!');</script>";
         echo "<script>document.location='view.php';</script>";
       }  else {
        echo "<script>alert('SOMETHING WENT WRONG!');</script>";

    }

}
}



?> 

<html>
<head>  
<link rel="stylesheet" type="text/css" href="style/style.css">


</head>


<body>
<h2>worker</h2>

<form method="post" >
<?php 
  if(isset($_GET['user_id']))
     {
         $userid= $_GET['user_id'];
$sql= mysqli_query($conn, "SELECT * FROM worker WHERE id = $userid");

while ($row = mysqli_fetch_array($sql)) {
?>
<h4>  first_name: </h4>
  <input type="text" name="first_name" value="<?php echo $row['first_name']?>">
<h4>  last_name: </h4>
  <input type="text" name="last_name" value="<?php echo $row['last_name'] ?>">
<h4>  middle_name: </h4>
  <input type="text" name="middle_name" value="<?php echo $row['middle_name'] ?>">
  <h4> age: </h4>
  <input type="text" name="age" value="<?php echo $row['age'] ?>">
  <h4>  address: </h4>
  <input type="text" name="address" value="<?php echo $row['address'] ?>">
  <h4> contact: </h4>
  <input type="text" name="contact" value="<?php echo $row['contact'] ?>">

<?php
 }
}  ?>
 <p> <input type="submit" name="update" value="Submit"></p> 
</form> 
    
<style type="text/css">
  
table {
  border: 5px dotted #B36C6C;
}




</style>


</style>
</body>
</html>