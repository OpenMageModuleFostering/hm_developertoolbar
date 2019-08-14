<?php

class MW_Developertoolbar_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function checkAllowsIps()
	{
		$dem = 0;
		$allowedIps = Mage::getStoreConfig('dev/restrict/allow_ips');
    	$remoteAddr = Mage::helper('core/http')->getRemoteAddr();
	    $allowedIps_arr = explode(",",$allowedIps);
	    foreach ($allowedIps_arr as $value) {
	    	if(trim($remoteAddr) == trim($value))
	    	{
	        	$dem++;
	        	break;
	        }
	    }
		return $dem;
	}
}