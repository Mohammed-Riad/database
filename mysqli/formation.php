<?php

// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname="store car";
// // Create connection
// $conn = new mysqli($servername, $username, $password ,$dbname);

// echo"Check connection";
// try{
//     $q = "INSERT INTO car 
//     VALUES (:id, :img, :Model,:Price,:color)";
    
//     $stmt=$conn ->prepare($q);
    
//     $stmt->bindParam(':id', $_REQUEST['id']);
//     $stmt->bindParam(':img', $_REQUEST['Image']);
//     $stmt->bindParam(':Model', $_REQUEST['Model']);
//     $stmt->bindParam(':Price', $_REQUEST['Price']);
//     $stmt->bindParam(':color', $_REQUEST['color']);
    
//     $stmt->execute();
    
    
//       // set the PDO error mode to exception
    
//       echo " add";
    

      
//     } catch(PDOException $e) {
//         // echo "Connection failed: " . $e->getMessage();
//       }

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }



///////////////////////////////////////////////////////////////////////////////////////////////////

$pdo = "mysql:host=localhost;dbname=store car";
$username = "root";
$password = "root";

try {
  $conn = new PDO($pdo, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
//   $createTaple=  "CREATE TABLE car (
//     CarID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     Image VARCHAR(30) ,
//     Model VARCHAR(30) ,
//     Price int,
//     color VARCHAR(30)
//      )";
// $conn->query($createTaple);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

try{
$q = "INSERT INTO car 
VALUES (:id, :img, :Model,:Price,:color)";

$stmt=$conn ->prepare($q);

$stmt->bindParam(':id', $_REQUEST['id']);
$stmt->bindParam(':img', $_REQUEST['Image']);
$stmt->bindParam(':Model', $_REQUEST['Model']);
$stmt->bindParam(':Price', $_REQUEST['Price']);
$stmt->bindParam(':color', $_REQUEST['color']);

$stmt->execute();





  // set the PDO error mode to exception

  echo " add";


  
} catch(PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
  }

 ////////////////////////////////////////////////////////////////////////////////////////////////////////

//   $sql = "SELECT id, Model FROM car";
//   $result = mysqli_query($conn, $sql);
  
//   if (mysqli_num_rows($result) > 0) {
//       // output data of each row
//       while($row = mysqli_fetch_assoc($result)) {
//           echo "id: " . $row["id"]. " - Name: " . $row["Model"]. "<br>";
//       }
//   } else {
//       echo "0 results";
//   }
  
//   mysqli_close($conn);






// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "store car";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "SELECT Model FROM car";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo " - Model: " . $row["Model"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

// mysqli_close($conn);

//////////////////////////////////////////////////////////////////////////////////////////////


$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "store car";

// CREATE CONNECTION
$conn = mysqli_connect($servername, 
  $username, $password, $databasename);

// GET CONNECTION ERRORS
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL QUERY
$query = "SELECT * FROM car ";

try 
{
    $conn = new PDO(
      "mysql:host=$servername;dbname=$databasename", 
      $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $conn->prepare($query);
    // EXECUTING THE QUERY
    $stmt->execute();

    $r = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // FETCHING DATA FROM DATABASE
    $result = $stmt->fetchAll();
    // OUTPUT DATA OF EACH ROW

    
    foreach ($result as $row)   
    {
       
        
        echo "id: " . $row["CarID"]. " - Model: " . 
          $row["Model"]. " | Image: " . $row["Image"]." | color: " . $row["color"].  "<br>";

      

          
    }
  
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


echo "<br>";
echo "<br>";



$id=$_POST['id'];

if (isset($_POST['submit'])) {
  if(empty($id))
  {
   return "empty id";
  }}


