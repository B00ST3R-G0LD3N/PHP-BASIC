<?php

$productenLijst = array ("fanta", "pinda's", "cake", "bananen", "appels", "milkshake", "schoonmaak doek", "onderbroeken", "flesje water", "melk");
$productenPrijs = array ( 1,75, 1,46, 2.43, 1,21, 1,60, 4,50, 1.40, 21,50, 2,17, 1,45);

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo var_dump($input);
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    switch($leeftijd) 
    { 
        case 19:  
        break;
        case 18:       
        break;
        case 17:
        break;
        case 16:
        break;
        default:     
    }
    echo $leeftijd;
}

function getDiscount()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    switch($leeftijd) 
    {
        case 0.19:
        break;
        case 18:       
        break;
        case 17:
        break;
        case 16:
        break;
        default:     
    }
    echo $leeftijd;
}

function getPrijs()
{
    $productenLijst = array ("fanta", "pinda's", "cake", "bananen", "appels", "milkshake", "schoonmaak doek", "onderbroeken", "flesje water", "melk");
    $productenPrijs = array ( 1,75, 1,46, 2.43, 1,21, 1,60, 4,50, 1.40, 21,50, 2,17, 1,45);

    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    
    echo $aantalProd * $productenPrijs[$productnummer];
}



?>