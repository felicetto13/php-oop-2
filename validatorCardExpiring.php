<?php

trait ValidatorExpiringDate {

    private function validateExpiring($date){
        if (!isset($date) || strlen(trim($date)) === 0 || !is_string($date)) {
           throw new Exception("Error Processing Request");
           
          }

    }
}