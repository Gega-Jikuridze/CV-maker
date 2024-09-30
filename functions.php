<?php

// create h1 
function h1($value, $class=''){
    echo '<h1 class="'.$class.'">' . $value . '</h1>';
};




// create h2 
function h2($value, $class=''){
    echo '<h2 class="'.$class.'">' . $value . '</h2>';
};




// create h3 
function h3($value, $class=''){
    echo '<h3 class="'.$class.'">' . $value . '</h3>';
};


function p($value, $class=''){
    echo '<p class="'.$class.'">' . $value . '</p>';
};


// create a 

function a($value, $link="#", $class= ""){
    echo '<a href="'.$link.'" class="'.$class.'">' . $value . '</a>';
};



// create image 

function image($value,$class=''){
    echo '<img src="'.$value.'" alt="Photo" class="'.$class.'">';
}