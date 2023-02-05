<?php
$year=2000;
if($year % 4==0 && $year % 100==0 && $year % 400==0){

    echo "{$year} this is lipier";}

    elseif($year %4== 0 && $year % 100 ==0){

    echo "this is lipier";}

    elseif($year %4== 0){

        echo "this is lipier";}

    else{

    echo"{$year} is not a lipier";
}


echo "\n";


    if ($year % 4==0 &&($year % 100!=0 || $year % 400==0)){
    echo "This is lipier year";}
    else{
    echo "{$year}this is not a lipier year";
    }

