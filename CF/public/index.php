<?php
# CF\public\index.php

/*
Front Controller  
*/

/*
routing
*/

// La variable get 'p' existe
if(isset($_GET['p'])){

    // utilisation du switch
    switch($_GET['p']){
        // si nous sommes sur interview
        case "interview" :
            include "../template/interviewView.php";
            break;
        // si nous sommes sur exposition
        case "expo" :
            include "../template/expositionView.php";
            break;
        // si nous sommes sur conclusion
        case "conclusion" :
            include "../template/conclusionView.php";
            break;
        // si la variable get ne correspond pas
        default :
            include "../template/error404View.php";
    }
// pas de variable p, nous sommes sur l'accueil    
}else{
    // view homepage
    include "../template/homepageView.php";
}


// déboggage variable get
// var_dump($_GET);