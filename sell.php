<?php
echo "<a href='userhome.php'>Back</a>";
include('session.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
  $description=$mysqli->real_escape_string($_POST['description']);
  $category=$mysqli->real_escape_string($_POST['category']);
  
  $price=$mysqli->real_escape_string($_POST['price']);
  $seller=$mysqli->real_escape_string($login_session[0]);
  $image_path=$mysqli->real_escape_string('images/sell/'.$_FILES["img"]["name"]);

  if(preg_match("!image!",$_FILES['img']['type']))
  {
   if(copy($_FILES['img']['tmp_name'],$image_path))
   {
    $_SESSION['seller']=$seller; 
    $_SESSION['price']=$price;
    $_SESSION['category']=$category;
    $_SESSION['description']=$description;
    $_SESSION['image']=$image_path;
    $sql="INSERT into sellingitems(sellerid,price,description,category,image,who)"."values('$seller','$price','$description','$category','$image_path','user')";
    if($mysqli->query($sql)===true){
      //echo "item uploaded succesfully";
    }
   }
  }
}

?>
<html>
<head>
<title>Sell</title>
<style>
body{
background-color:#1BA3E7;
font-family: Arial, Helvetica, sans-serif;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
	
form {border: 3px solid #f1f1f1;}
</style>
</head>
<body>
<?php $_SESSION['message']?>
<form action="sell.php" method="post" enctype="multipart/form-data">
  <div class="container">
  
    <h1 align="center" fontsize="333px">SELL</h1><b>
    <p>Please fill in this form to sell an item.</p></b>
    <hr><b>
    <label for="category">Choose a category:</label></b>

<select name="category">
  <option value="electronics">Electronics</option>
  <option value="kitchenaccessories">Kitchen Accessories</option>
  <option value="clothes">Clothes</option>
  <option value="musicalinstruments" selected>Musical Instruments</option>
  <option value="vehicles">Vehicles</option>
</select>
<hr>

        <div><b>
      <label for="image"> select the image of the Item  :</label>
      <hr></b>
      <input type="file" name="img" value="img" required />
     </div>
	<hr>
       <label for="price"><b>Price</b></label>
       <input type="number" placeholder="price" name="price" required>
       <hr>
       <label for="description"><b>Description</b></label>
       <input type="textarea" placeholder="description" name="description" rows="5" cols="20" required>
    <hr>
  

      <button type="submit" class="registerbtn">Upload</button>
  </div>
</form>  
</body>
</html>
