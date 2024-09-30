<?php


// header 
function setHeader(){
   echo '<header>';
     echo '<div class="header container">';
        echo '<div class="logo ">';
           a('CV Maker','index.php');
        echo '</div>';

        echo '<div class="nav ">';
           a('Home');
           a('MyCV');
           a('Contact');
        echo '</div>';
     echo '</div>';
   echo '</header>';
    
};




// footer 

function setFooter(){
    echo '<footer>';
      echo '<div class="footer container">';
         echo '<div class="logo ">';
            a('CV-maker','index.php');
         echo '</div>';
 
         echo '<div class="nav ">';
            a('+995 555 41 41 36');
            a('cvmaker@gmail.com');
            a('Tbilisi');
         echo '</div>';
      echo '</div>';
    echo '</footer>';
     
 };