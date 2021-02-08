<?php

namespace App;

class PasswordValidator {

    public function validate(string $password)
    {   
        $passwordLength = strlen($password);
        $regEx = preg_match('/[A-Z]/', $password);

        if($passwordLength > 8 && $regEx) {
            return true;
        }

        return false;
    }

} 

?>