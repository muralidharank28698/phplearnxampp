<?php
    include("connection.php");
    // $user = $_POST["username"];
    // $pass = $_POST["password"];
    // $email = $_POST["email"];
    



    //insert
    // $query = "insert into sample_table (name, password, email) values ('".$user."', '".$pass."', '".$email."')";
    
    // $res = $con->query($query);
    // if($res == TRUE) {
    //     echo "Inserted success";
    // } else {
    //     echo "Failed to Insert";
    // }





    // select
   $query= "SELECT * from sample_table";
   
   $result=mysqli_query($con,$query); 
   while($row=mysqli_fetch_array($result))
   {
       echo "".$row["name"]. "".$row["password"]."".$row["email"]."<br>";
   
   
    //    echo "<table>";
    //    echo "<tr>";
    //    echo "<td>".$row['name']."</td>"
    //    echo "<td>".$row['password']."</td>"
    //    echo "<td>".$row['email']."</td>";
    //    echo "</tr>";
    //    echo "</table>";
   
    }

    
   
   
   
   // $result=$con->query($query);

    // if($result->num_rows >0){
    //     while($row=$result->fetch_assoc())
    //     {
    //         $row;
    //     }
    // }
    //     else{
    //         echo "0 results";
    //     }
    //     $con->close();
    
?>