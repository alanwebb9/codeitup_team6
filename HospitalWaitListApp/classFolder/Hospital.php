<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hospital
 *
 * @author Saoir
 */
class Hospital {
    //put your code here
    private $name;
    private $address;
    private $eircode;
    private $county;
    private $treatments = array();
    
    function _construct($hospital_name, $hospital_address, $hospital_eircode, $hospital_county, $hospital_treatments)
    {
        $this->name = $hospital_name;
        $this->address = $hospital_address;
        $this->eircode = $hospital_eircode;
        $this->county = $hospital_county;
        $this->treatments = $hospital_treatments;
    }
    function _getName()
    {
        return $this->name;
    }
    function _getTreatments()
    {
        return $this->treatments;
    }
    function _getAddress()
    {
        return $this->address;
    }
    function _getEircode()
    {
        return $this->eircode;
    }
}
