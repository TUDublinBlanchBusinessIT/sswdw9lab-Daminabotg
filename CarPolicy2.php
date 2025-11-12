<?php
class CarPolicy
{
    private $policyNumber;
    private $yearlyPremium;
    private $dateOfLastClaim;

   
    public function __construct($pn, $yp)
    {
        $this->policyNumber = $pn;
        $this->yearlyPremium = $yp;
    }

    public function setDateOfLastClaim($dolc)
    {
        $this->dateOfLastClaim = $dolc;
    }

    
    public function getTotalYearsNoClaims()
    {
        $currentDate = new DateTime();
        $lastDate = new DateTime($this->dateOfLastClaim);
        $interval = $currentDate->diff($lastDate);
        return $interval->format("%y");
    }

    
    public function getDiscount()
    {
        $years = $this->getTotalYearsNoClaims();

        if ($years >= 3 && $years <= 5) {
            return 0.10; 
        } elseif ($years > 5) {
            return 0.15; 
        } else {
            return 0.00; 
        }
    }

    
    public function getDiscountedPremium()
    {
        $discountRate = $this->getDiscount();
        $discountAmount = $this->yearlyPremium * $discountRate;
        return $this->yearlyPremium - $discountAmount;
    }

    public function __toString()
    {
        return "PN: " . $this->policyNumber;
    }
}
?>
