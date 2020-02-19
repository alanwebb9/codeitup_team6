<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Treatment
 *
 * @author Saoir
 */
class Treatment {
    //put your code here
    private $name;
    private $hospital;
    private $avgWaitTime;
    
    function _construct($treatment_name, $treatment_hospital, $treatment_waitTime)
    {
        $this->name = $treatment_name;
        $this->hospital = $treatment_hospital;
        $this->avgWaitTime = $treatment_waitTime;
    }
}
