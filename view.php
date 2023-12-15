<?php 
include('db.php');
include('header.php');

// Retrieve data from the database
$sql = "SELECT * FROM worker";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

     echo "<h1> WORKER </h1> ";

     echo "<a href='create.php'> WORKER </a>";

   echo "<table border =  '1' width = '50%'><tr><th> id </th> 
    <th> first_name </th> 
    <th> last_name</th> 
    <th> middle_name</th>
    <th> age</th>
    <th> address</th>
    <th> contact</th>  
     <th colspan = '2'> Action</th> </tr>";    
    while($row = mysqli_fetch_assoc($result)) {

                $id = $row['id'];                

         echo "<tr>  
          <td>" . $row["id"]. "</td> 
         <td>" . $row["first_name"]. "</td> 
         <td> " . $row["last_name"]. "</td> 
         <td> " . $row["middle_name"]. "</td>
         <td> " . $row["age"]. "</td>
         <td> " . $row["address"]. "</td>
         <td> " . $row["contact"]. "</td>";

        echo "<td><a href='update.php?user_id=$id'</a>EDIT</td>";    
        echo "<td><a href='delete.php?user_id=$id'</a>DELETE</td>"; 


        echo "</tr>";    

    }
        echo "</table>"; 
} else {
    echo "0 results";
} 
?>
<style>
table{
    font-size:  20px;
    font-family:    fantasy ;
            
}
table {
  border: 5px hidden #B36C6C;
}
table{
    width: 100%;
}

th{
    height: 70px;
}

</style>


