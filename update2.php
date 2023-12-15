<?php include('db.php');
include('header.php');
// update records in database
if(isset($_POST['update'])){
    if(isset($_GET['user_id'])){
    $id = $_GET['user_id'];

   $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age']; 
    
    $sql = "UPDATE applicant SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', age='$age' WHERE id= $id";
 
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('You have succesfully update the record!');</script>";
         echo "<script>document.location='view2.php';</script>";
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
<h2>applicant</h2>

<form method="post" >
<?php 
  if(isset($_GET['user_id']))
     {
         $userid= $_GET['user_id'];
$sql= mysqli_query($conn, "SELECT * FROM applicant WHERE id = $userid");

while ($row = mysqli_fetch_array($sql)) {
?>
<h4>  first_name: </h4>
  <input type="text" name="first_name" value="<?php echo $row['first_name']?>">
<h4>  middle_name: </h4>
  <input type="text" name="middle_name" value="<?php echo $row['middle_name'] ?>">
  <h4>  last_name: </h4>
  <input type="text" name="last_name" value="<?php echo $row['last_name'] ?>">
  <h4> age: </h4>
  <input type="text" name="age" value="<?php echo $row['age'] ?>">

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