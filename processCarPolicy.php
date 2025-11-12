<?php

include("CarPolicy2.php");


$policyNumber = $_POST['policyNumber'];
$yearlyPremium = $_POST['yearlyPremium'];
$dateOfLastClaim = $_POST['dateOfLastClaim'];


$myCarpolicy = new CarPolicy($policyNumber, $yearlyPremium);
$myCarpolicy->setDateOfLastClaim($dateOfLastClaim);



echo "<H2>Car Policy Results</H2>";
echo "Policy Number: " . $myCarpolicy . "<BR>";
echo "Years No Claims: " . $myCarpolicy->getTotalYearsNoClaims() . "<BR>";
echo "Initial Premium: €" . $yearlyPremium . "<BR>";
echo "Discounted Premium: €" . $myCarpolicy->getDiscountedPremium() . "<BR>";
?>
