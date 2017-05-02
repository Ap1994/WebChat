<?php

// if($)
$servername = "localhost";
$username = "root";
$password = "";
$db = "mychat";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

if(isset($_GET['name'])){

$name = $_GET['name'];
$email= $_GET['email'];
 
 // echo $name."  ".$email;

// Check connection
$sql = "INSERT INTO name (name, message)
VALUES ('".$name."', '".$email."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($conn->connect_error) {
    // $conn->connect_error = "sush";
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


}

?>

<html>
<body>

<form action="chat.php" method="get">
Name: <input type="text" name="name"><br>
message: <input type="text" name="email"><br>
<input  type="submit" onclick="loadDoc()">




</form>

</body>
</html>

<?php
$link = mysqli_connect("localhost", "root", "", "mychat");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


/* Select queries return a resultset */
if ($result = mysqli_query($link, "SELECT * FROM name ")) {
    // printf("Select returned %d rows.\n", mysqli_num_rows($result));

    foreach ($result as $v) {
        // var_dump($v); echo "<BR>";
        
        echo '<b>'.$v['name'].'</b>  :  '.$v['message'];
        echo '<br>';

    }
    
    // var
}


mysqli_close($link);
?>



<!DOCTYPE html>
<html>
<body>

<div id="demo">
<!-- <h2>Let AJAX change this text</h2> -->
<script 
  function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", try1.php, true);
  xhttp.send();
}
 setInterval(function(){loadDoc()}, 100);
  </script>
</div>

</body>
</html>