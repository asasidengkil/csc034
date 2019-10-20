<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><?php 
echo "<img src='img/wd.gif'height='80'/>";
?>
        <h1><?php echo $row['name']; ?></h1>
    	<h3>Marks :<?php echo $row['marks']; ?>
        <br>Grade :<?php echo $row['grade']; ?>
        <br>Points :<?php echo $row['points']; ?></h3>
    
    </center>
	 <div class="reminder">
    <p><a href="logout.php">Log out</a></p>
  </div>
</div>

</body>
</html>