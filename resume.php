<?php 
include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="./style.css?v=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php


if($_SERVER['REQUEST_METHOD']=="GET"){
    $gender = $_GET['gender'];
    $name = $_GET["name"]; 
    $phone = $_GET["phone"];
    $email = $_GET["email"];
    $address = $_GET["address"];
    $link = $_GET["link"];
    $aboutMe = $_GET["aboutme"];
    $skills = $_GET["skills"];
    $experience = $_GET["experience"];



echo '<section class="cv-section">';
echo  '<div class="cv">';
    h1('Name:   '.$name,'title');
echo   ' <div class="resume">';
echo       '<div class="resume-left">';
      if($gender==='male'){
        image('./assets/male.avif');
      }elseif($gender==='female'){
        image('./assets/female.jpg');
      };
h3("<i class='bx bx-phone'></i>". $phone); 
h3("<i class='bx bx-envelope' ></i>". $email); 
h3("<i class='bx bx-map' ></i>". $address); 
h3("<i class='bx bx-link' ></i>". $link); 
           
echo "</div>";
        

echo      '<div class="resume-right">';
  echo          '<div class="about-me">';
                h1('About me');
                p($aboutMe);
 echo          ' </div>';

          echo ' <div class="skills">';
             h1('Skills');
                // <p>HTML/CSS</p>
                // <p>JAVASCRIPT</p>
                // <p>PHP</p>
            echo '</div>';

           echo '<div class="experience">';
                h1('Experience');
                p($experience);
          echo  '</div>';
       echo '</div>';
   echo '</div>';
echo '</div>';
echo "</section>";



};




?>

    
</body>
</html>