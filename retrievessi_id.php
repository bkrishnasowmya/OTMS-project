<?php
if(!empty($_GET['email'])){
    
    $db = new mysqli('localhost', 'root','', 'userdetails');
    
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
        $sql="SELECT image FROM ssidetails WHERE email = {$_GET['email']}";   
        $result = mysqli_query($db,$sql);
    $count=mysqli_num_rows($result);
    if($count > 0){
        $imgData = $result->fetch_assoc();
        
      
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }
}
?>
<html>
<body>
<form action="retrievessi_id.php" method="get">
 <h3>enter email:</h3>
<hr>
 <input type="text" name="email" required />
<hr>
<button type="submit">submit</button>
</form>
</body>
</html>