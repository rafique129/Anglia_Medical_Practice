<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common{
    
    public function __construct() {
        
    }
    
    /*
     * calculate the percentage
     */
    public function calculatePercentage($varIn,$varFrom){
        return round($varIn * 100 / $varFrom,2);
    }
    
} 

