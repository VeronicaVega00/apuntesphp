

<?php 

$fase ='variable global';


function holamundo (){
    global $fase;
    echo $fase;


    $year =2019;
    echo $year;
}




holamundo();


function welcome  (){
    return 'welcome';
}


function hey (){
    return 'hey';
}


function comeras (){
    return 'vas a comer ?';
}


$saludo = "comeras";
echo  $saludo()
?>