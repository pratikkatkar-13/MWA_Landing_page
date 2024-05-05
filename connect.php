<?php
if(isset($_POST['email']))
{
$server="localhost";
$name="root";
$password="";
$dbname = "login_form";
$con= mysqli_connect($server,$name,$password,$dbname);
if(!$con)
    die ("failed".mysqli_connect_error());

// echo "sucess";
$email=$_POST['email'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$sql = "INSERT INTO login (email, name, mobile, address, dob) VALUES ('$email','$name','$mobile','$address','$dob')";
// echo $sql;

if(mysqli_query($con,$sql))
{
    echo "<script>alert('submitted successfully!');</script>";
}
else
{
      echo "error:";
      echo $sql;
      echo mysqli_error($con);
}

// SQL QUERY 
$query = "SELECT * FROM `login`;"; 
  
// FETCHING DATA FROM DATABASE 
$result = $con->query($query); 

  if ($result->num_rows > 0)  
  { 
      // OUTPUT DATA OF EACH ROW 
      while($row = $result->fetch_assoc()) 
      { 
          echo "Id: " . 
              $row["id"]. "Email Address:   " . 
              $row["email"]. "Name:   " .  
              $row["name"]. "Mobile No:   " .
              $row["mobile"]. "Address:   " .
              $row["address"]. "Date Of Birth:   " .  
              $row["dob"]. "<br>"; 
      } 
  }  
  else { 
      echo "0 results"; 
  } 
mysqli_close($con);
}
?>
