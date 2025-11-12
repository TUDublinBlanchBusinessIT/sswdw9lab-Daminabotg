<?php
date_default_timezone_set('Europe/Dublin');
include("CarPolicy2.php");

$initialPremium = 600;
$myCarpolicy = new CarPolicy("XM123456", $initialPremium);
$myCarpolicy->setDateOfLastClaim("2015-10-10");

echo "Years no claims: " . $myCarpolicy->getTotalYearsNoClaims() . "<br>";
echo "Your initial premium is €" . $initialPremium . "<br>";
echo "Your discounted premium is €" . $myCarpolicy->getDiscountedPremium() . "<br>";
?>

