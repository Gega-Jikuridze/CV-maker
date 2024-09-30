<?php
    include("functions.php");
    include('components.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css?v=1.0">
</head>
<body>
   <?php 
    //    header 
     setHeader();



     echo '<form action="./resume.php" method="get">';
     echo '<input type="text" placeholder="Name" name="name" required>';
     echo '<label>';
     echo ' <input type="radio" name="gender" value="male" required>';
     echo 'Male';
     echo '</label>';
     echo '<label>';
     echo ' <input type="radio" name="gender" value="female" required>';
     echo 'Female';
     echo '</label>';
     echo '<input type="number" placeholder="phone" name="phone" required>';
     echo '<input type="email" placeholder="email" name="email" required>';
     echo '<input type="text" placeholder="address" name="address" required>';
     echo '<input type="text" placeholder="link" name="link" required>';
     echo '<input type="text" placeholder="About Me" name="aboutme" required>';
     echo '<input type="text" placeholder="Skills" name="skills" required>';
     echo '<input type="text" placeholder="Experience" name="experience" required>';
     echo '<input type="submit" value="Create CV">';
     
     
     echo '</form>';






    // footer 
    setFooter();
    
   ?>
</body>
</html>