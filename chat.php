<?php
include 'try1.php';

if(!isset($_COOKIE['name'])) {
    echo "<script> x = window.prompt('enter your name');  document.cookie = 'name='+x;</script>";

}
?>

<!DOCTYPE html> 
<html>
    <head>
        <title>Chat System in PHP</title>
<link rel="stylesheet" href="style.css" media="all"/>    <script>
        
        function loadDoc(){
        
        var req = new XMLHttpRequest();
        
        req.onreadystatechange = function(){
        
        if(req.readyState == 4 && req.status == 200){
        
        document.getElementById('chat').innerHTML = req.responseText;
        } 
        }
        req.open('GET','op.php',true); 
        req.send();
        
        }
        setInterval(function(){loadDoc()},100);
    </script>
    </head>
    
<body onload="loadDoc();">

<div id="container">
        <div id="chat_box">
        <div id="chat"></div>
        </div>
        <form method="post" action="chat.php">
        <!-- <input type="text" name="name" placeholder="enter name"/>  -->
        <textarea name="message" placeholder="enter message"></textarea>
        <input type="submit" name="submit" value="Send it"/>
        
        </form>
        <?php 
        if(isset($_POST['submit'])){ 
        
        $name = $_COOKIE['name'];
        $message = $_POST['message'];
        
        $query = "INSERT INTO name (name,message) values ('$name','$message')";
        
        $run = $con->query($query);
        
        
        if($run){
            echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
        }
        
        
        }
        ?>

</div>

</body>
</html>
















