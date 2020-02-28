<html>

<body>
<?php
$servername = "localhost";
$username = "mansiwakodkar";
$password = "root";
$dbname = "study";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO mycasauser1 (username, password,address,gender,email,phone)
    VALUES
    ('$_POST[username]','$_POST[password]','$_POST[address]','$_POST[gender]','$_POST[email]','$_POST[phone]')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
    catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;




?>

</body>

</html>
 



