<?php

$TuitionFee=20000;

$Res=($TuitionFee>=20000)? 0.25 * $TuitionFee : 
(($TuitionFee >=10000 && $TuitionFee <12000)? 0.2* $TuitionFee:
(($TuitionFee >=7000 && $TuitionFee <10000)? 0.15 * $TuitionFee:
(($TuitionFee <=7000)? "invalid Data":"")));

echo $Res;
?>