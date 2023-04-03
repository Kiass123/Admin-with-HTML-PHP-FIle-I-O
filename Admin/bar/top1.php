<html>
<head>
</head>
<body>
  
<header>  
<br><br>
<div class="right">
"Logged in as <?php if(isset($_SESSION['username'])) ?>
    <a href="welcome.php">Home <?php echo "||" ?>
    <a href="viewprofile.php">View Profile</a><?php echo "||" ?>
    <a href="notice.php">Notice Board</a><?php echo "||" ?>
    <a href="doctorlist.php">Doctor & Receptionist list</a><?php echo "||" ?>
    <a href="medicalhistory.php">Medical History Tracing</a><?php echo "||" ?>
    <a href="inventory.php">Inventory</a><?php echo "||" ?>
    <a href="salary.php">Salary</a><?php echo "||" ?>
  <a href="logout.php">Logout</a>
</div>
</header> 
<br><br>
<hr>

</body>
</html>